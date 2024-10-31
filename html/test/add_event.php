<?php
ini_set("display_errors", 'On');
error_reporting(E_ALL);
require_once '/var/www/vendor/autoload.php';

use Dotenv\Dotenv;

// .envファイルを読み込む
$dotenv = Dotenv::createImmutable('/var/www/');
$dotenv->load();

// MySQLからリフレッシュトークンを取得
$conn = new mysqli($_ENV['MYSQL_HOST'], $_ENV['MYSQL_USER'], $_ENV['MYSQL_PASSWORD'], $_ENV['MYSQL_DATABASE']);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT refresh_token FROM test_api ORDER BY seq DESC LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  $row = $result->fetch_assoc();
  $refresh_token = $row['refresh_token'];
} else {
  die("リフレッシュトークンがデータベースに保存されていません。");
}
$conn->close();

// Googleクライアントの設定
$client = new Google_Client();
$client->setClientId($_ENV['CLIENT_ID']);
$client->setClientSecret($_ENV['CLIENT_SECRET']);

// リフレッシュトークンを設定し、アクセストークンをリフレッシュ
$client->refreshToken($refresh_token);
$access_token = $client->getAccessToken();

// アクセストークンを取得して出力
if (isset($access_token['access_token'])) {
    echo "アクセストークン: " . $access_token['access_token'];
} else {
    echo "アクセストークンの取得に失敗しました。";
}



// アクセストークンを設定
$client->setAccessToken($access_token['access_token']);

// カレンダーAPIのサービスを作成
$service = new Google_Service_Calendar($client);

// 新しいイベントを作成
$event = new Google_Service_Calendar_Event([
    'summary' => 'サンプルイベント',
    'location' => 'オンライン',
    'description' => 'これはテストイベントです。',
    'start' => [
        'dateTime' => '2024-11-01T10:00:00',
        'timeZone' => 'Asia/Tokyo',
    ],
    'end' => [
        'dateTime' => '2024-11-01T11:00:00',
        'timeZone' => 'Asia/Tokyo',
    ],
    'attendees' => [
        ['email' => 'example@example.com'],
    ],
]);

// イベントをカレンダーに挿入
$calendarId = 'primary';
$event = $service->events->insert($calendarId, $event);
echo 'Event created: ' . $event->htmlLink;