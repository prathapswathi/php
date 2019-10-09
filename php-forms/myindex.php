<html>
<head>
<style>
 * {
  margin: 0;
  padding: 0;
}

.body{
    background-color:skyblue;
    text-align:center;
    color:red;
    margin:2px solid;
   
}
.div{
    
    width: 500px;
    margin: 25px auto;
      
}
form{
    padding: 20px;
 background: #64696e;
  color: #fff;
  -moz-border-radius: 4px;
  -webkit-border-radius: 4px;
  border-radius: 4px;
}
form input {
  height: 25px;
  line-height: 25px;
  background: #fff;
  color: #000;
  padding: 0 6px;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}
</style>
<!-- <script src="https://cdn.jsdelivr.net/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
  <script src="js/ajax-validate.js"></script> -->
</head>
<body id="body" class="body">
<h1>This My New Page For Database Connection</h1>
<div id="div" class="div">
<form action="submit" method="POST" name="submit">
<form>
<input type="text" name="name" id="name" placeholder="enter your name"><br><br>

<input type="email" name="mail" id="email" placeholder="enter your email address"><br><br>
<input type="text" name="gender" id="gender" placeholder="enter your gender"><br><br>
<input type="text" name="age" id="age" placeholder="enter your age"><br><br>
<button type="submit" name="submit" >submit</button>
</form>
</div>

</body>

</html>
