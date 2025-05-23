<?php
$ip = $_SERVER['REMOTE_ADDR'];
$ua = $_SERVER['HTTP_USER_AGENT'] ?? 'no-agent';
$ref = $_SERVER['HTTP_REFERER'] ?? 'no-ref';
$time = date("Y-m-d H:i:s");

file_put_contents("log.txt", "$time | $ip | $ua | $ref\n", FILE_APPEND);

header("Content-Type: image/png");
echo base64_decode("iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAADUlEQVR42mP8z8BQDwAE/wH+JeayWwAAAABJRU5ErkJggg==");