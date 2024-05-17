<?php

include('ConnectDB.php');

// Retrieve the POST data.
$name = $_POST['name'];
$code = $_POST['code'];
$price = $_POST['price'];
$quantity = $_POST['quantity'];

$sql = "INSERT INTO unhealthysnacks (`name`, `code`, `price`, `quantity`) VALUES (?, ?, ?, ?)";
try {
  $stmt = $conn->prepare($sql);
  $stmt->execute([$name, $code, $price, $quantity]);
  echo "Added Unhealthy snack";
} catch (Exception $e) {
  echo "Could not add snack.";
}
