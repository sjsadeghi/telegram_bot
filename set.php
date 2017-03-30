<?php
/**
 * Created by PhpStorm.
 * User: sj
 * Date: 3/30/2017
 * Time: 1:17 PM
 */

require __DIR__ . '/vendor/autoload.php';

$API_KEY = '369917175:AAELjpCYpUGmQ4hsNfwNH62QAPrnQTp37Sk';
$BOT_NAME = 'EnAmuzanBot';
$hook_url = 'https://yourdomain/path/to/hook.php';
try {
    $telegram = new Longman\TelegramBot\Telegram($API_KEY, $BOT_NAME);

    // Set Webhook
    $result = $telegram->setWebhook($hook_url);
    if ($result->isOk()) {
        echo $result->getDescription();
    }
} catch (Longman\TelegramBot\Exception\TelegramException $e) {
    echo $e;
}