<?php
 $firstname = filter_input(INPUT_POST,'fname');
 $lastname = filter_input(INPUT_POST,'lname');
//if($_POST['submit']){

//$firstname = $_POST('fname');
//$lasttname = $_POST('lname');

if (!empty($firstname)){
if (!empty($lastname)){
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "123456";
    $db = "demo";   

    $con =new mysqli ($dbhost,$dbuser,$dbpass,$db);
    if (mysqli_connect_error()) {
 
   die('Could not connect:( ' . mysqli_connect_errno() .')' . mysqli_connect_error());
 
   }
   else{
    $sql="INSERT INTO nametable (fname, lname)
 
    values ('$firstname','$lastname')";
    if($con->query($sql))
    {
        echo "1 record added";
        echo "\n";
    }
    else{
        echo "Error: ". $sql ."<br>". $con->error;
    }
    $con->close();
   }
}
else{
    echo "Lastname should not be empty";
    die();
}
}
else{
    echo "Firstname should not be empty";
    die();
}
echo "</br>";
echo "<label>Firstname:</label>";
echo $firstname;
echo "</br>";
echo "<label>Lastname:</label>";
echo $lastname;

//}
 ?>