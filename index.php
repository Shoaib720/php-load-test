<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Load Testing</title>
</head>
<body>

<h1>Load Testing application</h1>

<h3>How to use this app:</h3>

Add request parameter "?operation=OPERATION" after url <br><br>

Where: <br>

OPERATION = 'cpu' => CPU intensive workload <br>
OPERATION = 'memory' => MEMORY intensive workload <br>
OPERATION = 'disk' => DISK intersive workload <br>
OPERATION = 'network' => NETWORK intensive workload <br><br><br>

<?php
if (isset($_GET['operation'])) {
    $operation = $_GET['operation'];

    switch ($operation) {
        case 'network':
          include('network.php');
          break;
        case 'memory':
          include('memory.php');
          break;
        case 'cpu':
          include('cpu.php');
          break;
        case 'disk':
          include('disk.php');
          break;
        default:
            echo "Welcome to Simple PHP App!";
    }
}
?>
  
</body>
</html>

