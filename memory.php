<?php
// Simulate a memory (RAM)-intensive task
$memoryArray = [];
for ($i = 0; $i < 10000; $i++) {
    $memoryArray[] = str_repeat('x', 1024);
}
echo "Memory task completed!";