<?php

include './index.php';

$sql = "SELECT * FROM myguests";
$stmt = $conn->prepare($sql);
$stmt->execute();
$rs = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo "<table border='1'>
  <tr>
    <th>FirstName</th>
    <th>LastName</th>
    <th>Email</th>
  </tr>
";

foreach($rs AS $row) {
  echo "<tr>
    <td>".$row['firstname']."</td>
    <td>".$row['lastname']."</td>
    <td>".$row['email']."</td>
  </tr>";
}

echo "</table>";


$conn = null;
