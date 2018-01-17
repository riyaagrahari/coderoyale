<?php
include 'config.php';
	$u="";$p="";$e="";$b="";$y="";$c="";$m="";
$u=trim($_POST['name']);
$p=trim($_POST['pwd']);
$e=trim($_POST['email']);
$b=trim($_POST['branch']);
$y=trim($_POST['year']);
$c=trim($_POST['college']);
$m=trim($_POST['phone']);
	
$f=false;
  $errMsg1=$errMsg2=$errMsg3=$errMsg4=$errMsg5=$errMsg6=$errMsg7=$errMsg8="";
if (!preg_match("/^[a-zA-Z ]*$/",$u)) 
{
	$errMsg1= "Only letters and white space allowed in name.";
    $f=	true;
}
if( strlen($p) < 6 ) 
	{$errMsg2= "Password must be atleast of 6 characters.";
	$f=true;
	}

// Password must be strong
//if(!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{6,12}$/', $p)) 
	//{$errMsg2 = "Password must be at least 6 characters and must contain at least one lower case letter, one upper case letter and one digit";$f=true;}


//check for valid email 

               
if (!filter_var($e, FILTER_VALIDATE_EMAIL)) 
 {$emailMsg = "Invalid email format.";
 $f=true;
	}	  

//check if the number field is numeric
  if(is_numeric($m) == false)
  {$errMsg4=  " Please enter only numeric values as contact number.";
        $f=true;
	}
  
  if(is_numeric($y) == false)
  {$errMsg5=  "Please enter only numeric values in year.";
        $f=true;
	}
  if(strlen($m)<10)
  {$errMsg6=  "Contact Number should be of ten digits.";
        $f=true;
	}
	
	if (!preg_match("/^[a-zA-Z ]*$/",$b)) 
{
	$errMsg7= "Only letters and white space allowed in branchname.";
    $f=	true;
}
if (!preg_match("/^[a-zA-Z ]*$/",$c)) 
{
	$errMsg8= "Only letters and white space allowed in collegename.";
    $f=	true;
}
if($f==true)
{  echo "<script>alert('$errMsg1$errMsg2$errMsg3$errMsg4$errMsg5$errMsg6$errMsg7$errMsg8');window.location='index.php';</script>";
}
else{

	$q="insert into signup( name,password, email, branch, year,college, phone) values( '$u','$p','$e','$b',$y,'$c',$m)";
	$m=mysqli_query($con,"INSERT INTO users (email) values ('$e')");
$res=mysqli_query($con,$q);
if(!($res && $m)){
    echo mysqli_error()."Error";
}
else{
  echo "<script>alert('YOU ARE REGISTERED.');window.location='index.php';</script>";
  }//final code will execute here.


	}
?>