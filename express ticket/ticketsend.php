<?php
require_once('connection.php');
            $names=$_POST['name1'];
			$address=$_POST['name2'];
			$phone=$_POST['name3'];
			$addre=$_POST['name4'];
			$phon=$_POST['name5'];
			
			
			$insert=mysql_query("INSERT INTO ticket(date,tr_names,time,destination,price,cr_id) VALUES(now(),'$names','$address','$phone','$addre','$phon')")or die(mysql_error());
$message="ticket has been booking!!";
 print"<script>window.alert('$message');window.location='ticketform.php';</script>";

?>

