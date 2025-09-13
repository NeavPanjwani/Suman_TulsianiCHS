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
 * sendOTPEmail - used by forgot password flow
 * @param string $toEmail
 * @param string|null $toName
 * @param string|int $otp
 * @return bool
 */
function sendOTPEmail($toEmail, $toName, $otp) {
    try {
        $mail = getMailerInstance();
        $mail->addAddress($toEmail, $toName ?? '');
        $mail->Subject = 'Your OTP to reset password - Veena Infotech';

        $body  = "<p>Dear " . htmlspecialchars($toName ?? 'Member') . ",</p>";
        $body .= "<p>Your OTP to reset your password is: <strong>" . htmlspecialchars((string)$otp) . "</strong></p>";
        $body .= "<p>This OTP will expire in <strong>10 minutes</strong>. If you did not request this, please ignore this email.</p>";
        $body .= "<p>Regards,<br/>Veena Infotech</p>";

        $mail->Body    = $body;
        $mail->AltBody = "Your OTP is: " . (string)$otp . " — valid for 10 minutes.";

        $mail->send();
        return true;
    } catch (Exception $e) {
        error_log("sendOTPEmail error: " . $e->getMessage());
        return false;
    }
}
