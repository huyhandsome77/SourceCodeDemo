<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Tải tự động các gói cài đặt qua Composer
require 'vendor/autoload.php';

$mail = new PHPMailer(true);

try {
    // Cấu hình SMTP
    $mail->isSMTP();
    $mail->Host       = 'sandbox.smtp.mailtrap.io'; // Máy chủ SMTP của Mailtrap
    $mail->SMTPAuth   = true;
    $mail->Username   = '1e81b8380cd2eb';          // Thay bằng username của bạn
    $mail->Password   = '9ea76366eb3849';           // Thay bằng password của bạn
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 2525;

    // Thông tin người gửi và người nhận
    $mail->setFrom('from@example.com', 'Magic Elves');
    $mail->addAddress('to@example.com', 'Mailtrap Inbox');

    // Nội dung email
    $mail->isHTML(true);
    $mail->Subject = 'You are awesome!';
    $mail->Body    = '
    <h1>Congrats for sending test email with Mailtrap!</h1>
    <p>If you are viewing this email in your inbox – the integration works.</p>
    <p>Now send your email using our SMTP server and integration of your choice!</p>
    ';
    $mail->AltBody = 'Congrats for sending test email with Mailtrap!';

    // Gửi email
    $mail->send();
    echo 'Email đã được gửi thành công!';
} catch (Exception $e) {
    echo "Email không thể gửi. Lỗi: {$mail->ErrorInfo}";
}
