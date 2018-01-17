<?php
session_start();
//include 'time.php';
//Import the SDK 
include 'sdk/index.php';
//Setting up the Hackerearth API
$source = $_POST['txtarea'];
$input= $_POST['input'];
$lang= $_POST['lang'];
$qid=$_POST['qid'];
//echo $input;
//echo $source;
//echo $lang;

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

?>
<!DOCTYPE html>
<html>
<head>
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<title>Code royale|| UPES-CSI</title>
<style>
 .action-button
  {
  	position: relative;
  	padding: 10px 40px 10px 40px;
    margin: 0px 10px 10px 0px;
    float: left;
  	border-radius: 5px;
  	font-family: 'verdena';
  	font-size: 25px;
  	color: #FFF;
  	text-decoration: none;
  }
  .blue
	{
		background-color: #3498DB;
		border-bottom: 5px solid #2980B9;
		text-shadow: 0px -2px #2980B9;
	}
  .action-button:active
{
	transform: translate(0px,5px);
  -webkit-transform: translate(0px,5px);
	border-bottom: 1px solid;
}
#output
{
	font-size:65px;
	position: relative;
	bottom:120px;
	color: #0e5467;
}
</style>
</head>
<body style="background-image: url('b18.jpg'); background-size:cover;">
<div class="header">
		<div class="container">
			<div class="logo">
				<a href="index.php"><span></span></a>
			</div>
      <div class="header-right">
      
      </div>
	</div>
</div>

<br><br><br><br><br><br>
 <center><img src="yugmak1.png" style="position:relative;bottom: 100px;height:150px;width:200px;"></center>
<h1 id="output"><center>CODE ROYALE</center></h1>
<div style="position:relative;bottom:120px;">

<div align="center" style="font-size:120%"> <b>Compile Status :</b> <?php echo $response['compile_status']; ?> </div><br><br>
<div align="center" style="font-size:120%"> <b>&nbsp;Time Used :</b> <?php echo $response['run_status']['time_used']; ?> </div><br><br>
<div align="center" style="font-size:120%"><b>Output :</b> <?php echo $response['run_status']['output']; ?> </div><br><br>
<div align="center" style="font-size:120%"><b>Language :</b> <?php echo $lang; ?> </div>
</div>
<?php
if($response['compile_status']=='OK'){
	
?>
  
  
  <!--<button class="action-button shadow animate blue" type="submit" value="submit" style="width:auto; position:relative;left:580px; bottom:10px;" >SUBMIT</button>-->
 
</form>

<?php
}
else{
	?>
<button class="action-button shadow animate blue" onclick="alert('NOT COMPILED !');" type="submit" style="width:auto; position:relative;left:580px; bottom:10px;" >SUBMIT</button>
<?php
}
?>
</body>
</html>