<?php
date_default_timezone_set('Asia/Tokyo');
header('Content-Type: application/json; charset=UTF-8');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, OPTIONS');
header('X-Powered-By: Hidden');

const COMPOSER_FILE = './vendor/autoload.php';

if( strtolower( $_SERVER['REQUEST_METHOD'] ) != 'get' ) {
    set_http_response_code(405);
    exit(1);
}

$headers = apache_request_headers();

require_once(COMPOSER_FILE);
define('CLIENT_ID', 'xxxxxxxxxx');
$client = new Google_Client(['client_id' => CLIENT_ID]);
$payload = $client->verifyIdToken($_SERVER['HTTP_X_TOKEN']);
if ($payload && isset($payload['sub']) && isset($payload['email'])) {
    echo json_encode($payload);
    exit();
}

http_response_code(401);
exit(1);
