<?php


$msg="";
if(isset($_POST["submit"]))
{
    $host="localhost";
    $user="root";
    $pwd="123456";
    $db="demo";
    $con = new mysqli ($host , $user , $pwd , $db);

    $email=$con->real_escape_string($_POST["email"]);
 $password=$con->real_escape_string($_POST["password"]);
$cpassword=$con->real_escape_string($_POST["cpassword"]);
}
if($password != $cpassword)
{
    $msg="please check your password";
    echo $msg;
}
else
{
    $hash=password_hash($password,PASSWORD_BCRYPT);
    $sql="insert into users(email,password) VALUES ('$email','$hash')";
    if($con->query($sql))
    {
        echo "1 record added";
        echo "\n";
        
    }
    
}
?>