<?php
ini_set("display_errors", 'On');
error_reporting(E_ALL);
require_once '/var/www/vendor/autoload.php';

use Dotenv\Dotenv;

session_start();

// .envファイルを読み込む
$dotenv = Dotenv::createImmutable('/var/www/');
$dotenv->load();

// Googleクライアントの設定
$client = new Google_Client();
$client->setClientId($_ENV['CLIENT_ID']);
$client->setClientSecret($_ENV['CLIENT_SECRET']);
$client->setRedirectUri($_ENV['REDIRECT_URI']);
$client->addScope(Google_Service_Calendar::CALENDAR);
$client->setAccessType('offline');
$client->setPrompt('consent'); // consentを強制することで毎回リフレッシュトークンを取得

// 認証を開始
$auth_url = $client->createAuthUrl();
header('Location: ' . filter_var($auth_url, FILTER_SANITIZE_URL));
exit;
