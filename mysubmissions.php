<?php
include 'config.php';
//include 'time.php';
session_start();
$sql= mysql_query(" SELECT * FROM Submissions where user_id ='$_SESSION[user_id]' ");
if(!$sql){
		echo mysql_error();
	}
	$count=mysql_num_rows($sql);


?>
<html>
<head>
<title>
Code Royale | UPES-CSI
</title>
<style>
 #bootstrap-overrides.table {
 	
}
button {
	background-color: #4CAF50;
	color: white;
	padding: 15px 15px;
 }
	 #bootstrap-overrides table{
	border: 3px groove ;
    width: 80%;
    

}

 #bootstrap-overrides th, td {
	text-align: center;
border-top: 0.2px solid black;

margin: 10px;
padding: 15px;

}
#bootstrap-overrides input[type="submit"]{

    background-image: linear-gradient(to bottom, #84cfcc, #29a9b3);
    border-color: #25ab96;
    border-bottom-color: #6db2d3;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    font-size: 16px;
    font: 1em Bodoni;


}
#bootstrap-overrides input:hover[type="submit"] {
box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
background-color: #3e8e41
}


.list{
 padding: 10px;
 }
 #bootstrap-overrides h2{
 text-align:center;
	font-size: 30px;
}
#bootstrap-overrides td{
padding:10px;
font-size: 20px;
color:black;
	border-top-width: 1px;
	border-top-style: solid;
	border-top-color: rgba(22, 22, 23, 0.62);;
}

#bootstrap-overrides th{
text-align: center;
padding:20px;
 background-color:rgba(12, 13, 15, 0.75);
 color: rgba(227, 229, 230, 0.86);
 font-family: Bodoni;
 font-weight:400;
 font-size: 18px;
}

</style>
 <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/devops-logo.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/devops-logo-logo.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/devops-logo-logo.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/devops-logo-logo.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/devops-logo.png">
</head>
<body id="bootstrap-overrides">
         <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:700,300,400">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/elegant-font/code/style.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/media-queries.css">
		<link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">

		<!-- Top menu -->
		<nav class="navbar navbar-fixed-top" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!--<a class="navbar-brand" href="index-2.html">Lancar - Bootstrap One-Page Portfolio Template</a>-->
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="top-navbar-1">
					<ul class="nav navbar-nav navbar-right">
						<li><a  href="home.php">Home</a></li>
						 <li><a  href="panel.php">Panel</a></li>
							<li><a  href="logout.php">Logout</a></li>
						<li><a  href="http://forum.upescsi.in" target="_blank" >Forum</a></li>


					</ul>
				</div>
			</div>
		</nav>
		<section id="home-section" class="home-section full-screen" style="background-image: url('b11.jpg'); background-size:cover;">
                <div class="pagetitle " style="padding:100px 0px 110px 0px;">
            <div class="page-title-text wow fadeInUp">
            	<h1 style="font-size:500%;"><font face="broadway" color="black"><b>CODE ROYALE</b></font></h1><br>
            	<!--<p>Register with us for new coding experience</p>-->
		<br>
		<h1 style="color:rgba(42, 209, 170, 0.83);font-family:Zefani">MY SUBMISSIONS</h1>
		
		</div>
		<br>

		<?php
		if($count!=0){
			?>
<center>
		<font face="Comic Sans MS">
		<table class="table" >
			<tr>

		    <th><font size="5"><b>Problem<b></font></th>
		    
			<th><font size="5"><b>Time Used<b></font></th>
				
				<th><font size="5"><b>Language<b></font></th>
				<th><font size="5"><b>Action<b></font></th>
		  </tr>
<!--<tr class="row2"><b><font size="25" color="black"><td>Problem</td><td>Code</td><td>Time Used</td><td>Memory<br>(KIB)</td><td>Language</td><td></td></font></b></tr>-->
<?php

		while($row = mysql_fetch_array($sql)){
?>

<tr class="row1"><td><?php echo $row['qid']; ?> </td><td><?php echo $row['Time_used']; ?></td><td><?php echo $row['language']; ?> </td>
<td><form method="POST" action="reques.php" ><input type="hidden" name="qid" value="<?php echo $row['qid']; ?>"><input type="submit" name="Reattempt"  value="Reattempt" > </form></td></tr>


</center>
<?php
}
echo "</table>";
echo "</center>";
}
else{
echo "No Submissions Yet !";
echo "<br><br><br><br><br><br><br><br><br><br><br><br>";
}
?>
</font>
		 <!-- Contact us (block 2) -->

	        </div>
        </div>
				<!-- Footer
				<footer>
					<div class="container">
						<div class="row">
							<div class="col-sm-12">
								<div class="scroll-to-top">
									<a href="#"><i class="fa fa-chevron-up"></i></a>
								</div>
							</div>
						</div>
						<div class="row">
									<div class="col-sm-7 footer-copyright">
										&copy; 2017 UPES-CSI.All Rights Reserved
									</div>

									<div class="col-sm-5 footer-social">
		<center>
									<font color="white" size="6">Follow us on:</font>
				<a href="https://www.facebook.com/upescsi"><i class="fa fa-facebook"></i></a>
										<a href="https://www.instagram.com/upescsi"><i class="fa fa-instagram"></i></a>
					<a href="https://www.twitter.com/upescsi"><i class="fa fa-twitter"></i></a>

		</div>
						</div>
					</div>
				</footer>-->
        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/retina-1.1.0.min.js"></script>
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <script src="assets/js/waypoints.min.js"></script>
        <script src="assets/js/jquery.countTo.js"></script>
        <script src="assets/js/masonry.pkgd.min.js"></script>
        <script src="assets/js/scripts.js"></script>

        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->


</script>
		</body>
		</html>
