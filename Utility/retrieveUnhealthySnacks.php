<?php

include('ConnectDB.php');

$sql = "SELECT * FROM unhealthysnacks LIMIT 5";

$stmt = $conn->prepare($sql);
$stmt->execute();

while ($row = $stmt->fetch()) {
  $data[] = $row;
}

echo json_encode($data);