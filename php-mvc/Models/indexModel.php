<?php
/** Autoloading The required Classes **/
class IndexModel
{
function __construct(){
}
public function getUsers(){
    $users = [
    ["name" => "Williams Isaac", "Phone Number" => "090982xxxxxx"],
    ["name" => "Oji Mike", "Phone Number"=> "080982xxxxxx"]
    ];
    return json_encode($users);
    }
    public function login(){
        //$login ="welcome to login";
       // return $login;
       ?>
       <form>
       user name:<input type="text" name="login"><br><br>
       password:<input type="password" name="password"><br><br>
       <input type="submit" name="submit" value="submit">
      
      new user ?<a href="newuser.php" > Register here </a> </form>
       <?php
    }
}
?>