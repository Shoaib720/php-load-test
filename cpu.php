<?php
// Simulate a CPU-intensive task
$sum = 0;
for ($i = 1; $i <= 1000000; $i++) {
    $sum += sqrt((float)$i);
}
echo "Sum of square roots : (string)$sum";
echo "CPU task completed!";