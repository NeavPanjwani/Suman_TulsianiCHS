<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/../vendor/autoload.php'; // adjust path if needed

// Form data
$flat_no = $_POST['flat_no'] ?? '';
$email   = $_POST['email'] ?? '';
$message = $_POST['message'] ?? '';

if (empty($flat_no) || empty($email) || empty($message)) {
    echo "Please fill in all fields.";
    exit;
}

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'veenatheveenagroup@gmail.com'; // SMTP username
    $mail->Password   = 'rdsaakmmgjupqjcl'; // App password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port       = 465;

    $mail->setFrom('veenatheveenagroup@gmail.com', 'Suman Tulsiani CHS Website');
    $mail->addAddress('infotech@veenaservices.com', 'Veena Infotech');  //Add a recipient

    $mail->isHTML(true);
    $mail->Subject = 'New Contact Form Message';
    $mail->Body    = "
        <strong>Flat No:</strong> {$flat_no}<br>
        <strong>Email:</strong> {$email}<br>
        <strong>Message:</strong><br>{$message}
    ";

    $mail->send();

    echo "success"; // This will be used by JS to show message
} catch (Exception $e) {
    echo "Mailer Error: {$mail->ErrorInfo}";
}
?>
