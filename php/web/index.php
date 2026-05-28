<?php
$request_uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// If they are looking for anything other than the homepage or index.php, block them
if ($request_uri !== '/' && $request_uri !== '/index.php') {
    http_response_code(404);
    // echo "<h1>404 Not Found</h1>";
    // echo "The requested file does not exist.";
    include __DIR__ . '/404.php';
    exit; // Stop executing the rest of your home page
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Docker Practice</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div class="flex justify-between item-center">
    <h1>Home Page</h1>
    <ul class="flex gap-5" type="none">
      <li><a href="index.php">Home</a></li>
      <li><a href="about.php">About</a></li>
      <li><a href="contact.php">Contact</a></li>
    </ul>
  </div>
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At dolor nemo dolorum, cupiditate nam obcaecati consequuntur ullam praesentium ducimus expedita. Provident assumenda id architecto! Accusamus excepturi dignissimos quas minima quaerat.</p>
</body>
</html>