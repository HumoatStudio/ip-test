<?php
// Получаем данные, отправленные с клиента
$data = json_decode(file_get_contents("php://input"), true);
$ip = $data['ip'];

// Ваш email
$to = "humoatstudio@gmail.com";
$subject = "IP Address Received";
$message = "IP Address: " . $ip;
$headers = "From: no-reply@example.com";

// Отправляем письмо
if (mail($to, $subject, $message, $headers)) {
    echo "Email sent successfully";
} else {
    echo "Failed to send email";
}
?>