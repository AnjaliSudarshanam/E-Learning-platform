<?php

$email = $_POST['email'];
$password = $_POST['password'];



// database connection

$conn = new mysqli('localhost','root','','login_info');
if ($conn->connect_error) {

    die('connection failed :'. $conn->connect_error);
}
else
{$stmt = $conn-> prepare("insert int login(email,password)
values(?,?)");

$stmt->bind_param("ss", $email,$password);
$stmt->execute();
echo "login successfull ......";
$stmt->close();
$conn->close();
}

?>