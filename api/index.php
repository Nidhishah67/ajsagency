<?php
include 'config/config.php';

$request_uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$request_uri = $request_uri !== null ? trim($request_uri, '/') : '';

$base_folder = 'ajsagency';

if (strpos($request_uri, $base_folder) === 0) {
    $request_uri = trim(substr($request_uri, strlen($base_folder)), '/');
}

$page = $request_uri === '' ? 'home' : $request_uri;

$file_path = __DIR__ . "/public/$page.php";

if (file_exists($file_path)) {
    include $file_path;
} else {
    include __DIR__ . '/includes/header.php';
    include __DIR__ . '/includes/footer.php';
    exit();
}
