<?php
// Serverless function v1
$name = $_GET['name'] ?? 'World';
header('Content-Type: application/json');
echo json_encode([
    "message" => "Hello, $name! (version 1)",
    "time" => date('c')
]);
