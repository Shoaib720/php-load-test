<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Load Testing</title>
</head>
<body>

<h1>Load Testing application</h1>

<hr>

<h4>Results</h4>

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

<hr>

<footer>
  <h3>Created by: Shoaib S. Shaikh</h3>

</footer>
  
</body>
</html>

