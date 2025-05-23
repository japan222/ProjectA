<?php
$data = [
  "ip" => $_SERVER['REMOTE_ADDR'],
  "ua" => $_SERVER['HTTP_USER_AGENT'],
  "ref" => $_SERVER['HTTP_REFERER'],
  "time" => date("Y-m-d H:i:s")
];

$options = [
  'http' => [
    'method'  => 'POST',
    'header'  => "Content-type: application/json\r\n",
    'content' => json_encode($data)
  ]
];

$context  = stream_context_create($options);
file_get_contents("https://your-api-name.onrender.com/api/track", false, $context);

// แสดง PNG 1x1
header("Content-Type: image/png");
echo base64_decode("iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAADUlEQVR42mP8z8BQDwAE/wH+JeayWwAAAABJRU5ErkJggg==");
