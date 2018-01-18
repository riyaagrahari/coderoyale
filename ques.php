<?php
include 'config.php';
//include 'time.php';
session_start();
$ques =isset($_POST['qid']);

$sql=mysqli_query($con,"SELECT * From Questions where qid = '$ques' ");
if(!$sql){
     echo mysqli_error();
}
$row = mysqli_fetch_array($sql);

?>
<!DOCTYPE html>
<html lang="en">


<head>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.2.6/ace.js" type="text/javascript" charset="utf-8"></script>
<script src="assets/js/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function () {
  //Disable cut copy paste
  $('body').bind('cut copy paste', function (e) {
    e.preventDefault();

  });
  
  //Disable mouse right click
  //$("body").on("contextmenu",function(e){
   // return false;
  //});
});
</script>
<style>

.button2
{
background-color: #555555;
border: none;
color: white;
padding: 15px 32px;
text-align: center;
text-decoration: none;
display: inline-block;
font-size: 16px;
cursor: pointer;
}
	button {
    background-color: #3fb7db;
    color: white;
    padding: 15px 15px;
   }
   #col-sm-8{
       min-height: 400px;
	   width=100px;
   }





   }
button.btn {
	height: 52px;
    margin: 0;
    padding: 0 20px;
    vertical-align: middle;
    background: #2ba560;
    border: 0;
    font-family: 'Open Sans', sans-serif;
    font-size: 22px;
    font-weight: 300;
    line-height: 52px;
    color: #fff;
    -moz-border-radius: 6px;
    -webkit-border-radius: 6px;
    border-radius: 6px;
    text-shadow: none;
    -moz-box-shadow: none;
    -webkit-box-shadow: none;
    box-shadow: none;
    -o-transition: all .3s;
    -moz-transition: all .3s;
    -webkit-transition: all .3s;
    -ms-transition: all .3s;
    transition: all .3s;
}

   }
   .cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

.container1 {
    padding: 12px;
}

}
.modal {
    display: none; /* Hidden by default */
    position: static; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 100px;

    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: #ADD8E6; /* Fallback color */
    background-color: #ADD8E6; /* Black w/ opacity */
    padding-top: 0px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #ADD8E6;
    bottom:0;
    margin: 10% auto 10% auto; /* 10% from the top, 10% from the bottom and centered */
	padding:20% auto 20% auto;
    border: 20px solid #888;
    width: 25%; /* Could be more or less, depending on screen size */
	overflow-x: scroll;
}

/* The Close Button (x) */
.close {
    position: absolute;
    top: 0;
    right: 25px;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)}
    to {-webkit-transform: scale(1)}
}

@keyframes animatezoom {
    from {transform: scale(0)}
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {

    .cancelbtn {
       width: 100%;
    }

}
input::-webkit-input-placeholder {
color: black !important;
}
}

<!--button.btn {
	height: 52px;
    margin: 0;
    padding: 0 20px;
    vertical-align: middle;
    background: #2ba560;
    border: 0;
    font-family: 'Open Sans', sans-serif;
    font-size: 22px;
    font-weight: 300;
    line-height: 52px;
    color: #fff;
    -moz-border-radius: 6px;
    -webkit-border-radius: 6px;
    border-radius: 6px;
    text-shadow: none;
    -moz-box-shadow: none;
    -webkit-box-shadow: none;
    box-shadow: none;
    -o-transition: all .3s;
    -moz-transition: all .3s;
    -webkit-transition: all .3s;
    -ms-transition: all .3s;
    transition: all .3s;
}-->
#bootstrap-overrides h1{
    color: #0e5467;
    text-shadow: 0 1px 6px rgba(80, 101, 100, 0.64);

}
 #ques{
    font-family:"Comic Sans MS";
    font-size:21px;
    font-weight: 600;
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
		<!--<link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">-->

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
					<!--<a class="navbar-brand" href="index-2.html">Lancar - Bootstrap One-Page Portfolio Template</a>-->
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="top-navbar-1">
					<ul class="nav navbar-nav navbar-right">
                    <li><a  href="http://forum.upescsi.in" target="_blank" >Forum</a></li>
					<li><a  href="logout.php">Log out</a></li>
					<li><a  href="panel.php">BACK</a></li>
					</ul>
				</div>
			</div>
		</nav>


        <!-- Page title -->
		 <section id="home-section" class="home-section full-screen" style="background-image: url('b18.jpg'); background-size:cover;background-size:cover;">
                <div class="pagetitle " style="padding:100px 0px 110px 0px;">
            <div class="page-title-text wow fadeInUp">
            	<h1 style="font-size:500%; position:relative;top:20px;"><font face="comic-sans" color="">CODE ROYALE</font></h1><br><br>
            	<!--<p>Register with us for new coding experience</p>-->
				</div>

<div class="categories">
<div class="container">
<h3 style="color:rgb(69, 225, 208);; position:realtive ; font-size:38px;">QUESTION</h3><br>
<h3 style="color:rgb(69, 225, 208);" align="left"> <?php echo $row['name']; ?></h3><br>
<p >
<div id="ques"; align="left" >
  <?php echo $row['Problem']; ?>
</div>
</font>
</p>
<br>

  <div class="form-group">
    <div align="left">
    <h3 style="color:rgb(69, 225, 208);">ANSWER:</h3><br>
     </div>
    <div class="col-sm-8" id="col-sm-8" align="left"  >
	<br>
	<br><br><br><br><br><br>

	</div>
    <form method="POST" action="run.php">
    <textarea name="txtarea" type="hidden" placeholder="Write your code here" id="txtarea5" cols="60" rows="10000000" class="form-control1" style="display:none"></textarea>
     <input type="hidden" name="qid" value="<?php echo $ques; ?>"  >
<font color="black">
	<input type="text" name="input" id="input"  style="position:relative;top:420px;right:800px;background-color: #e4e4e4;;" color:"black"; placeholder="INPUT" ></font>
 </font>
<!--<label style="position:relative;right:400px"><b>LANGUAGE</b></label>-->
  <select name="lang" id="lang" style="background-image: linear-gradient(to bottom, #84cfcc, #29a9b3);
    border-color: #25ab96;
    border-bottom-color: #6db2d3; padding:15px 15px; position:relative;top:40px;left:120px;right:75px;border:2px groove">
 <font size="4.5" color="black" face="Comic Sans MS"><strong>
<option disabled selected value><b>LANGUAGE </b></option>
<option value="C"><b>C(gcc) </b></option>
<option value="CPP"><b>C++(g++)</option></b></option>
<option value="JAVA"><b>Java</b></option>
<option value="PYTHON"><b>Python</b></option>
</strong></font>
</select>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<br>
<button type="submit" formtarget="_blank" value="submit" style=" position:relative;top:50px;left:90px;
    background-image: linear-gradient(to bottom, #84cfcc, #29a9b3);
    border-color:#96c5be;;
    border-bottom-color: #6db2d3;">Compile And Run</button>

    <button type="submit" formaction="submit.php" value="submit" style=" position:relative;top:50px;left:90px;
    background-image: linear-gradient(to bottom, #84cfcc, #29a9b3);
    border-color:#96c5be;;
    border-bottom-color: #6db2d3;">Submit</button>
 <!--<a href="panel.php" class="button2" style="position:relative; top:300px;right:10px;left:120px">BACK</a>-->

  </form>
  </div>


 


        </section>
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



    <script src="/ace-builds/src-noconflict/ace.js" type="text/javascript" charset="utf-8"></script>
    <script>
        
    var editor = ace.edit("col-sm-8");
    editor.setTheme("ace/theme/cobalt");
    editor.getSession().setMode("ace/mode/c_cpp");
    editor.getSession().on('change', function () {
      document.getElementById("txtarea5").value= editor.getSession().getValue(); 
 
   });

   document.getElementById("txtarea5").value=editor.getSession().getValue();
    
</script>

<script>
function show_alert() {
    document.getElementById("txtarea5").value= editor.getSession().getValue(); 

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

    </body>


</html>
