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

// 認証コードを取得し、トークンを取得する
if (isset($_GET['code'])) {
  $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);

  var_dump($token);
  echo "<br><br>";

  // リフレッシュトークンが含まれている場合に保存
  if (isset($token['refresh_token'])) {
      $refresh_token = $token['refresh_token'];

      // MySQLに保存
      $conn = new mysqli($_ENV['MYSQL_HOST'], $_ENV['MYSQL_USER'], $_ENV['MYSQL_PASSWORD'], $_ENV['MYSQL_DATABASE']);
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
      
      // リフレッシュトークンを保存
      $stmt = $conn->prepare("INSERT INTO test_api (refresh_token) VALUES (?)");
      $stmt->bind_param("s", $refresh_token);
      $stmt->execute();
      $stmt->close();
      $conn->close();

      echo "リフレッシュトークンが保存されました。";
  } else {
      echo "リフレッシュトークンが取得できませんでした。";
  }
}

?>
