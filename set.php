<?php
/**
 * Created by PhpStorm.
 * User: sj
 * Date: 3/30/2017
 * Time: 1:17 PM
 */

use Longman\TelegramBot\Request;

require __DIR__ . '/vendor/autoload.php';

$API_KEY = '369917175:AAELjpCYpUGmQ4hsNfwNH62QAPrnQTp37Sk';
$BOT_NAME = 'EnAmuzanBot';
$hook_url = 'https://bot-mytelegrambot.44fs.preview.openshiftapps.com/hook.php';
try {
    $telegram = new Longman\TelegramBot\Telegram($API_KEY, $BOT_NAME);
    $chat_id = 'https://t.me/sj_sadeghi';
    // Set Webhook
    $result = Request::sendMessage(['chat_id' => $chat_id, 'text' => 'Hi dear sajjad']);
    echo "result of send message is : " . $result;
    $result = $telegram->setWebhook($hook_url);

    if ($result->isOk()) {
        echo $result->getDescription();
    }
} catch (Longman\TelegramBot\Exception\TelegramException $e) {
    echo $e;
}
