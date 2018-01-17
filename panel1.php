<?php
include 'config.php';
//include 'time.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">



<head>

<style>
	button {
    background-color: #4CAF50;
    color: white;
    padding: 15px 15px;
   }
     #bootstrap-overrides table{
    border: 2px groove ;

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
 <!--background-color: #4CAF50;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;-->
    display: inline-block;
    font-size: 16px;
	font: 1em Bodoni;

    font-weight:none;


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
 color:#0a3662;
    border-top-width: 1px;
    border-top-style: solid;
    border-top-color: rgba(10, 29, 67, 0.75);
 }

  #bootstrap-overrides th{
 text-align: center;
 padding:20px;
   background-color:rgba(10, 29, 67, 0.75);
   color: rgba(255, 255, 255, 0.97);  
    font-family: Bodoni;
   font-weight:400;
   font-size: 18px;
 }
  #bootstrap-overrides h1{
  color:rgb(69, 225, 208);
}
 #bootstrap-overrides th{
  text-transform: capitalize;
}
</style>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Code Royale | UPES-CSI</title>

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



        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
 <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/devops-logo.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/devops-logo-logo.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/devops-logo-logo.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/devops-logo-logo.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/devops-logo.png">

    </head>

    <body id="bootstrap-overrides">


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

				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="top-navbar-1">
					<ul class="nav navbar-nav navbar-right">
                     <li><a  href="home.php" >Home</a></li>
                     <li><a  href="mysubmissions.php" >My Submissions</a></li>
					<li><a  href="logout.php">Log out</a></li>
						<li><a targer="_blank" href="http://forum.upescsi.in">Forum</a></li>
					</ul>
				</div>
			</div>
		</nav>

        <!-- Page title -->
		 <section id="home-section" class="home-section full-screen" style="background-image: url('b11.jpg'); background-size:cover;">
                <div class="pagetitle " style="padding:70px 0px 0px 0px;">
            <div class="page-title-text wow fadeInUp">
            	<!--<h1 style="font-size:500%;position:relative;top:15px; color:rgb(51, 106, 151);";id="h1"><font face="broadway" ><b>CODE ROYALE</b></font></h1><br><br>
            	<!--<p>Register with us for new coding experience</p>-->
				</div>
				<div align="center">
				<h1 style="font-family:Zefani;position:relative;top:40px;font-size: 50px;font">Problems</h1>
				<p><font size="5" color="black" face="Comic Sans MS"><b><!--Here is the list of questions.Brush up your skills,choose your questions and start coding now!--><b></font></p>
        <br><br><br><br>
				</div>
				</div>
                 <div class="list">

				 <center>
				<table style="width:80%;border-color:black;" class="table"  >
  <tr id="heading">

    <th><font size="5"><b>Questions</font><b></font></th>
    <th><font size="5"><b>Maximum Score</b></font></th>
	
		<th><font size="5"><b>Action</b></font></th>
  </tr>
<?php
$flag = mysqli_query($con,"SELECT random_que FROM users WHERE user_id =".$_SESSION['user_id']." ");
$val = mysqli_fetch_array($flag);
if(is_null($val['random_que'])){
$sql=mysqli_query($con,"SELECT * FROM Questions ORDER BY RAND() LIMIT 0,10");
if(!$sql){
  echo mysqli_error();
}
$count=mysqli_num_rows($sql);
$random = array();
while($row = mysqli_fetch_array($sql)){
  array_push($random,$row['qid']);
  ?>

  <tr>
    <td width=30%> <?php echo $row['name']; ?> </td>
    <td width=20%>100</td>
    
	<td width=20%> <form method="POST" action="ques.php" > <input type="hidden" name="qid" value="<?php echo $row['qid']; ?>" > <input type="submit" name="Attempt"  value="Attempt" > </form></td>



<?php
  }

  $new= implode(',', $random);
  $ran=mysqli_query($con,"UPDATE users SET random_que='$new' WHERE user_id=".$_SESSION['user_id']."");
  if(!$ran){
    echo mysqli_error();
  }

  ?>

</table>
</center>
				 </div>
          </section>
<?php
}
else
{
$ranque=$val['random_que'];
$que=mysqli_query($con,"SELECT * FROM Questions WHERE qid IN ($ranque)");
while($rand = mysqli_fetch_array($que)){
  ?>

  <tr>
    <td width=30%> <?php echo $rand['name']; ?> </td>
    <td width=20%>100</td>
    
  <td width=20%> <form method="POST" action="ques.php" > <input type="hidden" name="qid" value="<?php echo $rand['qid']; ?>" > <input type="submit" name="Attempt"  value="Attempt" > </form></td>

<?php
}
 ?>
 </table>
</center>
         </div>
          </section>

 <?php
}
?>






<!-- Footer -->
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
</footer>
        <script>


</script>

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
