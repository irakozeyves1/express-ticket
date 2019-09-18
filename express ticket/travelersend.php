<?php
require_once('connection.php');
            $names=$_POST['name1'];
			$address=$_POST['name2'];
			
			
			$insert=mysql_query("INSERT INTO traveller(date,tr_names,contact) VALUES(now(),'$names','$address')")or die(mysql_error());
$message="traveller has been recorded!!";
 print"<script>window.alert('$message');window.location='traveler.php';</script>";

?>

