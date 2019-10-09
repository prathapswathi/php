<?php
$connection = new mysqli("localhost", "root", "123456","mydba"); // Establishing Connection with Server..
$db = mysql_select_db("mydba", $connection); // Selecting Database
//Fetching Values from URL
$name2=$_POST['name1'];
$email2=$_POST['email1'];
$password2=$_POST['password1'];
$contact2=$_POST['contact1'];
//Insert query
$query = "insert into form_element(name, email, password, contact) values ('$name2', '$email2', '$password2','$contact2')";
if($connection->query($query)){
echo "Form Submitted Succesfully";
}
mysql_close($connection); // Connection Closed
?>
