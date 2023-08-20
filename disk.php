<?php
// Simulate a disk I/O-intensive task
$file = fopen('test.txt', 'w');
for ($i = 0; $i < 1000; $i++) {
    fwrite($file, "This is a test line.\n");
}
fclose($file);
echo "Disk task completed!";