<?php
header('Content-Type: application/json');

define("API_KEY", "4p1Str4t0");

$data['api_key'] = API_KEY;

echo json_encode($data);