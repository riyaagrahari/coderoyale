<?php
date_default_timezone_set ("Asia/Calcutta");
$s = mktime(20,0,0,01,29,2017);
$e = mktime(00,0,0,01,30,2017);
$time = time();
if(!($s<=$time && $time<=$e)){
 echo "<script>alert('Thank You For Your Participation!. ');window.location='index.php';</script>";
}
//else
	//echo "Sorry! Registration time is from 2:00 AM TO 5:00 AM only you can't register now ";
?>