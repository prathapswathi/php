<?php
session_start();
$name=$_SESSION["name"];
$usn=$_SESSION["usn"];
$age=$_SESSION["age"];
$password=$_SESSION["password"];
$hash=password_hash($password,PASSWORD_BCRYPT);

echo $name;
echo "<br><br>";
echo $usn;
echo "<br><br>";
echo $age;
echo "<br><br>";
echo $hash;
echo "<br><br>";
?>

<!-- <?php  
session_start();  
?>  
<html>  
<body>  
<?php  
echo "User is: ".$_SESSION["user"]; 
echo "Age is:".$_SESSION["age"];
?>  
</body>  
</html>   -->