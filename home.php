<?php
session_start();
//include 'time.php';

?>



<!DOCTYPE html>
<html lang="en">


<head>


	<style>
  body
  {
  	padding: 50px;
  }

  .animate
  {
  	transition: all 0.1s;
  	-webkit-transition: all 0.1s;
  }

  .action-button
  {
  	position: relative;
  	padding: 10px 20px;
    margin: 0px 10px 10px 0px;
    float: left;
  	border-radius: 5px;
  	font-family: 'verdena';
  	font-size: 25px;
  	color: #FFF;
  	text-decoration: none;
  }
  .green
  {
	  <!--background-image: linear-gradient(to bottom, #25dac6, #29c561);
		linear-gradient(to bottom, #2ec866, #29b35b);-->
	  border-color: #088837;
    border-bottom-color: #64874b;;
    background-color: #29b35b;

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





    #bootstrap overrides p{
   color: rgb(69, 225, 208);

}
.button {

     background-color: #004f7d;;
    border-color: #d8dbe4;
   
 
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: auto;
    position:relative;
    bottom:50px;
    left:200px;
}

.disabled {
    opacity: 0.4;
    cursor: not-allowed;
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
    <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="css/core.css">

 <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/devops-logo.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/devops-logo-logo.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/devops-logo-logo.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/devops-logo-logo.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/devops-logo.png">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->


    </head>

    <body style="background-image: url('b7.jpg'); background-size:cover;id=bootstrap-overrides;background-repeat:no-repeat;
    max-width: 120%;
    overflow-x: hidden;
}">


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
					<!--<li><a onclick="document.getElementById('id01').style.display='block'" style="width:auto;" background="black">PROFILE</a></li>
                    &nbsp;&nbsp;&nbsp;&nbsp;-->
                        <li><a style="cursor:pointer;" onclick="window.location.href='mysubmissions.php'" >MY SUBMISSIONS</a></li>

						<li><a style="cursor:pointer;" onclick="window.location.href='logout.php'" >LOG OUT</a></li>



					</ul>
				</div>
			</div>
		</nav>

        <!-- Page title -->
		 <section id="home-section" class="home-section full-screen">
                <div class="page-title top-content">
            <div class="page-title-text wow fadeInUp">
            	<!--<h1 style="font-size:500%;position:relative; bottom:90px; left:150px;"><font face="broadway" color="black"><b>CODE ROYALE</b></font></h1>
			<!--<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Lets Begin!</button>-->
        <button class="button disabled">DAY 1</button>&nbsp&nbsp
        <button class="button disabled">DAY 2</button>&nbsp&nbsp
        <button class="button">DAY 3</button>&nbsp&nbsp

        <font color="black">

				 <p style="position:relative; left: 210px;bottom:300px;color:black;font-size:25px;">“A good code is its own best documentation.”<br></p>
                                                 <p style="position:relative; left:400px;bottom:300px;color:black;">~ Steve McConnell<br></p>
				<b><p style="font-size:40px;position:relative; left:200px;bottom: 110px;color:#16303d;"> Welcome <?php echo $_SESSION['name']; ?><br></p></b>
        <form method="POST"  action="panel.php">
               
                                                 <b><p style="color:black;position:relative;bottom:70px;left:220px;">THE WAR BEGINS NOW!</p></b>

                 <button class="action-button shadow animate blue" type="submit" style="width:auto; position:relative;left:457px; bottom:70px;" >GET STARTED</button>
                 <!--<a href="#" class="action-button shadow animate green">Are</a>-->
               </form> 


     </div>
</div>
</section>


		<!-- Portfolio -->


<div id="id01" class="modal">

  <form class="modal-content animate" action="action_page.php">

    <div class="container1">





  </form>
</div>-->
</div></div>
<!-- Footer -->
<!--<footer>
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


    </body>


</html>
