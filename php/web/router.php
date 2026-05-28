<?php
// router.php
$path = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

// If the file exists physically, serve it directly
if (file_exists(__DIR__ . $path) && is_file(__DIR__ . $path)) {
    return false; 
}

// If it's the root URL, serve index.php
if ($path === '/' || $path === '/index.php') {
    include __DIR__ . '/index.php';
    exit;
}

// Otherwise, force a proper 404 response
http_response_code(404);
// echo "404 Not Found (Custom Router)";
include __DIR__ . '/404.php';
exit;