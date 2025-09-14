<?php
// PhpFiles/mail.php
// Wrapper for PHPMailer — supports Contact Us and OTP sending.
// Uses Gmail SMTP settings (same as your contact form). Update constants as needed.

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . '/../vendor/autoload.php'; // adjust path if vendor folder elsewhere

// ---------- SMTP / sender config - EDIT THESE ----------
const SMTP_HOST = 'smtp.gmail.com';
const SMTP_PORT = 465;                        // 465 for SSL, 587 for STARTTLS
const SMTP_USERNAME = 'veenatheveenagroup@gmail.com';
const SMTP_PASSWORD = 'rdsaakmmgjupqjcl';     // store securely in production
const SMTP_FROM_EMAIL = 'veenatheveenagroup@gmail.com';
const SMTP_FROM_NAME  = 'Veena Infotech';
const CONTACT_BCC     = ''; // e.g. 'admin@yourdomain.com' (optional)
// ---------- end config ----------

/**
 * Return configured PHPMailer instance
 * @return PHPMailer
 * @throws Exception
 */
function getMailerInstance() {
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host       = SMTP_HOST;
    $mail->SMTPAuth   = true;
    $mail->Username   = SMTP_USERNAME;
    $mail->Password   = SMTP_PASSWORD;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; // ENCRYPTION_STARTTLS if using port 587
    $mail->Port       = SMTP_PORT;
    $mail->setFrom(SMTP_FROM_EMAIL, SMTP_FROM_NAME);
    $mail->isHTML(true);
    $mail->CharSet = 'UTF-8';
    return $mail;
}

/**
 * sendContactEmail - used by your Contact Us page
 * @param string $fromEmail
 * @param string $fromName
 * @param string $subject
 * @param string $message
 * @return bool
 */
function sendContactEmail($fromEmail, $fromName, $subject, $message) {
    try {
        $mail = getMailerInstance();
        // Recipient is company inbox
        $mail->addAddress(SMTP_FROM_EMAIL, SMTP_FROM_NAME);

        // Set reply-to to visitor
        if (filter_var($fromEmail, FILTER_VALIDATE_EMAIL)) {
            $mail->addReplyTo($fromEmail, $fromName ?: 'Visitor');
        }

        // Optional admin BCC
        if (!empty(CONTACT_BCC)) {
            $mail->addBCC(CONTACT_BCC);
        }

        $mail->Subject = "[Contact Us] " . ($subject ?: 'No subject');
        $body  = "<p><strong>From:</strong> " . htmlspecialchars($fromName) . " &lt;" . htmlspecialchars($fromEmail) . "&gt;</p>";
        $body .= "<p><strong>Message:</strong></p><div>" . nl2br(htmlspecialchars($message)) . "</div>";
        $mail->Body    = $body;
        $mail->AltBody = strip_tags($message);

        $mail->send();
        return true;
     } catch (Exception $e) {
        error_log("sendContactEmail error: " . $e->getMessage());
        return false;
     }
}

/**
 * sendPasswordChangeConfirmation - used after successful password reset
 * @param string $toEmail
 * @param string|null $toName
 * @param string|null $flat_no
 * @return bool
 */
function sendPasswordChangeConfirmation($toEmail, $toName, $flat_no = null) {
    try {
        $mail = getMailerInstance();
        $mail->addAddress($toEmail, $toName ?? '');
        $mail->Subject = 'Password Changed Successfully - Suman Tulsiani CHS';
        
        // Get current date and time
        $date = date('Y-m-d H:i:s');
        
        $greeting = $flat_no ? "Dear Resident of Flat {$flat_no}," : "Dear " . htmlspecialchars($toName ?? 'Member') . ",";
        
        $body = <<<EOT
        <!DOCTYPE html>
        <html>
        <head>
            <style>
                body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
                .container { max-width: 600px; margin: 0 auto; padding: 20px; border: 1px solid #ddd; border-radius: 5px; }
                .header { background-color: #f5f5f5; padding: 10px; text-align: center; border-bottom: 1px solid #ddd; }
                .content { padding: 20px; }
                .success-message { font-size: 18px; color: #28a745; text-align: center; margin: 20px 0; }
                .details { background-color: #f9f9f9; padding: 15px; border-radius: 5px; margin: 15px 0; }
                .footer { font-size: 12px; text-align: center; margin-top: 20px; color: #777; }
            </style>
        </head>
        <body>
            <div class="container">
                <div class="header">
                    <h2>Suman Tulsiani CHS - Security Alert</h2>
                </div>
                <div class="content">
                    <p>{$greeting}</p>
                    <div class="success-message">Your password has been changed successfully!</div>
                    
                    <div class="details">
                        <p><strong>Date & Time:</strong> {$date}</p>
                        <p>If you did not make this change, please contact the society management immediately.</p>
                    </div>
                    
                    <p>You can now login to your account using your new password.</p>
                    <p>Thank you,<br>Suman Tulsiani CHS Management</p>
                </div>
                <div class="footer">
                    <p>This is an automated message, please do not reply to this email.</p>
                    <p>&copy; Suman Tulsiani CHS. All rights reserved.</p>
                </div>
            </div>
        </body>
        </html>
        EOT;
        
        $mail->Body = $body;
        $mail->AltBody = "Dear " . ($toName ?? 'Member') . ",\n\n"
                      . "Your password has been changed successfully!\n\n"
                      . "Date & Time: {$date}\n\n"
                      . "If you did not make this change, please contact the society management immediately.\n\n"
                      . "You can now login to your account using your new password.\n\n"
                      . "Thank you,\nSuman Tulsiani CHS Management";
        
        $mail->send();
        return true;
    } catch (Exception $e) {
        error_log("sendPasswordChangeConfirmation error: " . $e->getMessage());
        return false;
    }
}

/**
 * sendOTPEmail - used by forgot password flow
 * @param string $toEmail
 * @param string|null $toName
 * @param string|int $otp
 * @param string|null $flat_no
 * @return bool
 */
function sendOTPEmail($toEmail, $toName, $otp, $flat_no = null) {
    try {
        $mail = getMailerInstance();
        $mail->addAddress($toEmail, $toName ?? '');
        $mail->Subject = 'Your OTP to reset password - Suman Tulsiani CHS';

        $greeting = $flat_no ? "Dear Resident of Flat {$flat_no}," : "Dear " . htmlspecialchars($toName ?? 'Member') . ",";
        
        $body = <<<EOT
        <!DOCTYPE html>
        <html>
        <head>
            <style>
                body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
                .container { max-width: 600px; margin: 0 auto; padding: 20px; border: 1px solid #ddd; border-radius: 5px; }
                .header { background-color: #f5f5f5; padding: 10px; text-align: center; border-bottom: 1px solid #ddd; }
                .content { padding: 20px; }
                .otp-code { font-size: 24px; font-weight: bold; text-align: center; padding: 10px; background-color: #f9f9f9; border-radius: 5px; letter-spacing: 5px; margin: 20px 0; }
                .footer { font-size: 12px; text-align: center; margin-top: 20px; color: #777; }
            </style>
        </head>
        <body>
            <div class="container">
                <div class="header">
                    <h2>Suman Tulsiani CHS - Password Reset</h2>
                </div>
                <div class="content">
                    <p>{$greeting}</p>
                    <p>We received a request to reset your password for your Suman Tulsiani CHS account. Please use the following One-Time Password (OTP) to complete the process:</p>
                    
                    <div class="otp-code">{$otp}</div>
                    
                    <p>This OTP will expire in 30 minutes for security reasons.</p>
                    <p>If you did not request a password reset, please ignore this email or contact the society management if you have concerns.</p>
                    <p>Thank you,<br>Suman Tulsiani CHS Management</p>
                </div>
                <div class="footer">
                    <p>This is an automated message, please do not reply to this email.</p>
                    <p>&copy; Suman Tulsiani CHS. All rights reserved.</p>
                </div>
            </div>
        </body>
        </html>
        EOT;

        $mail->Body = $body;
        $mail->AltBody = "Dear " . ($toName ?? 'Member') . ",\n\n"
                      . "We received a request to reset your password for your Suman Tulsiani CHS account. "
                      . "Please use the following One-Time Password (OTP) to complete the process:\n\n"
                      . "{$otp}\n\n"
                      . "This OTP will expire in 30 minutes for security reasons.\n\n"
                      . "If you did not request a password reset, please ignore this email or contact the society management if you have concerns.\n\n"
                      . "Thank you,\nSuman Tulsiani CHS Management";

        $mail->send();
        return true;
    } catch (Exception $e) {
        error_log("sendOTPEmail error: " . $e->getMessage());
        return false;
    }
}
