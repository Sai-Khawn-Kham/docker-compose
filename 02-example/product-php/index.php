<?php
// 1. Allow any origin (or change '*' to 'http://localhost:5173' for better security)
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

echo json_encode([
  "service" => "product",
  "products" => [
    ["id" => 1, "name" => "Laptop"],
    ["id" => 2, "name" => "Phone"]
  ]
]);