<?php
include('./dbconnection.php');

$sql = "INSERT INTO appointments (fname, lname,mobile, email,date,time,mode,reason,msg) VALUES ('" . $_POST["first_name"] . "', '" . $_POST["last_name"] . "', '" . $_POST["mobile"] . "', '" . $_POST["email"] . "', '" . $_POST["date"] . "', '" . $_POST["time"] . "', '" . $_POST["mode"] . "', '" . $_POST["appointment_reason"] . "', '" . $_POST["comment"] . "')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    echo "<script>location.href='form-success.php';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
