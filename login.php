<?php
session_start(); 
if(!isset($_SESSION['username']))
{
header('location:index.php');
}
$hello = "Hello ".$_SESSION['username'];
?>
 
<html>
<head>
</head>
<body>

<h2>Welcome to Login page</h2>
	<?php echo $hello ?>

</body>
</html>