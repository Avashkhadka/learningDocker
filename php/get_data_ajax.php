<?php
$conn = mysqli_connect("db", "student", "student123", "lab_db");

if (!$conn) {
    die("Connection failed." . mysqli_connect_error());
}

$query = "SELECT * FROM student";
$result = mysqli_query($conn, $query);
$data = array();

while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}


echo json_encode($data);
?>