<?php

include('ConnectDB.php');

$sql = "SELECT * FROM healthysnacks LIMIT 5";

$stmt = $conn->prepare($sql);
$stmt->execute();

while ($row = $stmt->fetch()) {
  $data[] = $row;
}

echo json_encode($data);
