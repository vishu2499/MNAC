<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "mnac");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$name = mysqli_real_escape_string($link, $_REQUEST['name']);
$age = mysqli_real_escape_string($link, $_REQUEST['age']);
$phone = mysqli_real_escape_string($link, $_REQUEST['phone']);
$username = mysqli_real_escape_string($link, $_REQUEST['username']);
$password = mysqli_real_escape_string($link, $_REQUEST['pass']);
 
// Attempt insert query execution
$sql = "INSERT INTO cust_login (name, age, phone, username, password) VALUES ('$name', '$age', '$phone', '$username', '$password')";
if(mysqli_query($link, $sql)){
    header("location: login.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>