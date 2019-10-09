<?php
$name = filter_input(INPUT_POST,'name') ;
$email = filter_input(INPUT_POST,'mail') ; 
$gender = filter_input(INPUT_POST,'gender') ;
$age = filter_input(INPUT_POST,'age') ;

if(!empty($name && $email && $gender && $age))
{
   $host="localhost";
   $username="root";
   $password="123456";
   $db="demo";
   $con=new mysqli($host,$username,$password,$db);
   if(mysqli_connect_error())
   {
       die('Could not connect:( ' . mysqli_connect_errno() .')' . mysqli_connect_error());
   }
   else{
   $sql="insert into mydb(name,email,gender,age) values('$name','$email','$gender','$age')";
   if($con->query($sql)){
       echo "record added successfully";
       echo "<br>";
      // die();
   }
   else{
       echo "Cannnot add record some error exist";
       die();
   }
   $con->close();
}
}
else{
   echo "please enter all the details";
   die();
}
?>
<html>
<body>
name:<?php echo $name;?><br>
email:<?php echo $email;?><br>
gender:<?php echo $gender;?><br>
age:<?php echo $age;?><br>

</body>
</html>