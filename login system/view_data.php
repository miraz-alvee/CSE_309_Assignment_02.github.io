<?php
$conn = mysqli_connect('localhost','root','','tanvir contact db');

$sql = "SELECT * FROM `database_table`";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    echo "<table>";
    echo "<th>First Name</th>
          <th>Last Name</th>
          <th>Email</th>
          ";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
        <td>".$row['First_name']."</td>
        <td>".$row['Last_name']."</td>
        <td>".$row['Email']."</td>
        ";
    }
    echo "</table>";
} else {
    echo "No data found.";
}

?>