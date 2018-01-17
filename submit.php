<?php

include 'config.php';//Import the SDK 
include 'sdk/index.php';
//include 'time.php';

session_start();
//Setting up the Hackerearth API
$source = $_POST['txtarea'];
$input= $_POST['input'];
$lang=$_POST['lang'];
 
$hackerearth = Array(
		'client_secret' => 'e0034116c89dcefbc06dc373ad008ea7e3871733', //(REQUIRED) Obtain this by registering your app at http://www.hackerearth.com/api/register/
        'time_limit' => '5',   //(OPTIONAL) Time Limit (MAX = 5 seconds )
        'memory_limit' => '262144'  //(OPTIONAL) Memory Limit (MAX = 262144 [256 MB])
	);
//Feeding Data Into Hackerearth API
$config = Array();
$config['time']='5';	 	//(OPTIONAL) Your time limit in integer and in unit seconds
$config['memory']='262144'; //(OPTIONAL) Your memory limit in integer and in unit kb
$config['source']=$source;    	//(REQUIRED) Your formatted source code for which you want to use hackerEarth api, leave this empty if you are using file
$config['input']=$input;     	//(OPTIONAL) formatted input against which you have to test your source code
$config['language']=$lang;  //(REQUIRED) Choose any one of the below
						 	// C, CPP, CPP11, CLOJURE, CSHARP, JAVA, JAVASCRIPT, HASKELL, PERL, PHP, PYTHON, RUBY
//Sending request to the API to compile and run and record JSON responses
$response = run($hackerearth,$config);     // Use this $response the way you want , it consists data in PHP Array
//Printing the response
//echo"<pre>".print_r($response,1)."</pre>";

$qid=$_POST['qid'];
$user_id = $_SESSION['user_id'];
$time=mysqli_real_escape_string($con,$response['run_status']['time_used']);
$memory =mysqli_real_escape_string($con,$response['run_status']['memory_used']);
 $slink =  mysqli_real_escape_string($con,$response['web_link']);
 

if($response['compile_status']=='OK'){
 $sql=mysqli_query($con,"INSERT INTO submissions VALUES('$qid','$user_id','$slink','$lang','$source','$time','$memory')");
}
else{
	echo "<script>alert('Not Compiled');window.location='panel.php'</script>";
}
if($sql){
        echo "<script>alert('Your answer is recorded ');window.location ='panel.php';</script>";    }
    else{
echo "<script>alert('Error occured. Please try again.');window.location='panel.php';</script>";
		echo mysqli_error($con);
    }

?>


<br><br><br><br><br><br>
<div align="center" style="font-size:120%"> Compile Status : <?php echo $response['compile_status']; ?> </div><br><br>
<div align="center" style="font-size:120%"> Time Used : <?php echo $response['run_status']['time_used']; ?> </div><br><br>
<div align="center" style="font-size:120%"> Output : <?php echo $response['run_status']['output']; ?> </div>


</body>
</html>