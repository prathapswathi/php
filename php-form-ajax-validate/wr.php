<?php
$name = filter_input(INPUT_POST,'username');
$age = filter_input(INPUT_POST,'userage');
$course =filter_input(INPUT_POST,'usercourse');

$host = 'localhost';
$user = 'root';
$pass = '123456';
$db = 'demo';
$conn=new mysqli($host, $user, $pass, $db);
if (mysqli_connect_error()) {
 
    die('Could not connect:( ' . mysqli_connect_errno() .')' . mysqli_connect_error());
  
    }
    else{

// mysql_select_db('demo');

$insertdata=" INSERT INTO user_info VALUES( '$name','$age','$course' ) ";

if($conn->query($insertdata))
{
    echo "1 record added";
    echo "\n";
}
else{
    echo "Error: ". $insertdata ."<br>". $conn->error;
}
$conn->close();
}    

?>
