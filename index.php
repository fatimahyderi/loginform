<?php
session_start();    
 
if(isset($_POST['check']))    
{
        
if(!$_POST['username']=="" && !$_POST['password']==""){
$_SESSION['username']=$_POST['username'];   
header('location:login.php');
die();
}
else
{
$error="Enter username and password to login";
}
}
?>
 
<html>
<head>
<title>Main Page</title>
</head>
<body>
<Center>
<?php if(isset($error)){ echo $error; } ?>      
 
<form method="POST" name="login" action='#'>
 
User Name: <input name="username" type="text" />
<br/>
Pass Word: <input name="password" type="password" />
<br/>
<input name="check" type="submit" value="LOG IN" />
 
</form>
</center>
</body>
</html>