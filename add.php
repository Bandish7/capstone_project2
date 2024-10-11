<?php
include('./dbconnection.php');
include('./functions.php');

$sql = "INSERT INTO counsellor (fname, lname,mobile, email ,gender,available) VALUES ('" . $_POST["fname"] . "', '" . $_POST["lname"] . "', '" . $_POST["mobile"] . "', '" . $_POST["email"] . "', '" . $_POST["gender"] . "', '" . $_POST["available"] . "')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    echo "<script>location.href='counsellor.php';alert(\"Counsellor is added\");</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>