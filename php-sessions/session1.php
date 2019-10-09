<?php
session_start();
$_SESSION["name"]="SWATHI";
$_SESSION["usn"]="4DM15CS041";
$_SESSION["gender"]="FEMALE";
$_SESSION["password"]="Swathi123";


echo "Session information are set successfully.<br/></br></br>";

echo "<a href='session2.php'>Visit next page</a>";
?>

<!-- <?php  
session_start();  
?>  
<html>  
<body>  
<?php  
$_SESSION["user"] = "Sachin";  
$_SESSION["age"] = "19";
echo "Session information are set successfully.<br/>";  
?>  
<a href="session2.php">Visit next page</a>  
</body>  
</html>   -->