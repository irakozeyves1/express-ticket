<?php
require_once('connection.php');
            $names=$_POST['name1'];
			$address=$_POST['name2'];
			$phone=$_POST['name3'];
			$addre=$_POST['name4'];
			$phon=$_POST['name5'];
			$addr=$_POST['name6'];
			
			$insert=mysql_query("INSERT INTO worker(date,w_fname,w_lname,address,gender,telephone,salary) VALUES(now(),'$names','$address','$phone','$addre','$phon','$addr')")or die(mysql_error());
$message="worker has been recorde!!";
 print"<script>window.alert('$message');window.location='WORKERFORM.php';</script>";

?>

