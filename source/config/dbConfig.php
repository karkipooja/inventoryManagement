<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="testDatabase";

// Create connection
$conn = new mysqli($servername, $username, $password,$db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

// function insertRecord(){
// $qry="insert into users(email,password,firstName,lastname) values('sonusanwal65@gmail.com','abcd1234','Suraj','Sanwal')";
// if($conn->query($qry)){
// 	echo "record inserted sucessfully"
// }else{
// 	 die("insert failed: " . $conn->error);
// }
// }


?>
