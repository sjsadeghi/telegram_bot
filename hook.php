<?php
// Load composer
require __DIR__ . '/vendor/autoload.php';

$API_KEY = '369917175:AAELjpCYpUGmQ4hsNfwNH62QAPrnQTp37Sk';
$BOT_NAME = 'EnAmuzanBot';
try {
    // Create Telegram API object
    $telegram = new Longman\TelegramBot\Telegram($API_KEY, $BOT_NAME);

    // Handle telegram webhook request
    $telegram->handle();
} catch (Longman\TelegramBot\Exception\TelegramException $e) {
    // Silence is golden!
    // log telegram errors
    // echo $e;
}