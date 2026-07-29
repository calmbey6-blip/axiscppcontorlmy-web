<?php
$botToken = "8682562967:AAEQoKxLNPMh4cD4KQVTTwVJCEeTKdywrI4";
$chatId = "8690202014";


$data = json_decode(file_get_contents('php://input'), true);
$message = $data['message'];
$telegramApiUrl = "https://api.telegram.org/bot$botToken/sendMessage";
$payload = array(
    'chat_id' => $chatId,
    'text' => $message,
    'parse_mode' => 'MarkdownV2'
);
$ch = curl_init($telegramApiUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
$response = curl_exec($ch);
curl_close($ch);
echo $response;
?>
