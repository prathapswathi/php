 <html>
<head>
<link rel="stylesheet" href="css/bootstrap.css">

</head>

<body>
<?php 
 echo $reslt;

?>
<form action="" method="POST" style="margin:20px;border:2px solid gray;text-align:center">
  <p>
   <label>Username</label>
   <input id="username" value="" name="username" type="text" required="required" class="form-control"><br>
  </p>

  <p>
   <label>Password</label>
   <input id="password" name="password" type="password" required="required" class="form-control">
  </p>
  <br>
  <p>

     <button type="submit" class="btn btn-info" name="submit" >
     <span>Login</span></button>
     <button type="reset" class="btn btn-primary">
     <span>Cancle</span></button>
  </p>
 </form>

</body>
</html>


