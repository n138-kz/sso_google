<?php
date_default_timezone_set('Asia/Tokyo');
header('Content-Type: application/json; charset=UTF-8');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Disposition, Content-Type, Content-Length, Accept-Encoding, Origin, Accept, Access-Control-Allow-Headers, Authorization, X-Requested-With, X-Token');
header('Access-Control-Expose-Headers: *');

header('X-Powered-By: Hidden');

const COMPOSER_FILE = './vendor/autoload.php';

if( strtolower( $_SERVER['REQUEST_METHOD'] ) != 'get' ) {
    http_response_code(405);
    exit(1);
}

if( ! isset( $_SERVER['HTTP_X_TOKEN'] ) ) {
    http_response_code(401);
    exit(1);
}

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
