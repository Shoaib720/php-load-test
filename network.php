<?php

$ch = curl_init("https://httpbin.org/delay/3");

$response = curl_exec($ch);

curl_close($ch);

echo "Network task completed!";