<?php

session_start();
class Model {
 
  
 public function getlogin()
 {
  if(isset($_POST['submit']))
  {
    $user = filter_input(INPUT_POST,'username');
    $pswd =filter_input(INPUT_POST,'password');;
    // $host = "localhost";
    // $username = "root";
    // $password = "123456";
    // $dbname= "demo";
 
    // $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    include_once('model/db.php');
    $sql="SELECT * FROM login ";
   
     $result = $pdo->query($sql);

     while ($row = $result->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)) {
     $_SESSION["username"]=$row[1];
    if($row[1] == $user && $row[2] == $pswd){
      return 'login';
     }
      
      else {
            return 'please login again invalid';
      }


  }
 
 }
 

}
}