<?php
session_start();
include 'config.php';
//include 'time.php';
$email=$_POST['username'];
$pass=$_POST['password'];
$que=mysqli_query($con,"SELECT * FROM signup WHERE email='".$email."' AND password='".$pass."'") or die("Could not execute query");
$cou=mysqli_num_rows($que);
$value=mysqli_fetch_array($que);
$name=$value['name'];
$user_id=$value['userid'];
if($cou == 0)
{
	echo "<script>alert('Sorry. Wrong email-id or password. Please try again ');window.location ='index.php';</script>"; 
	//echo $cou;
	//echo $value;
}
else
{
	$_SESSION['name']=$name;
    $_SESSION['user_id']=$user_id;
	//echo "Hello";
	$path = "Location: home.php";
	header($path);
}

?>
