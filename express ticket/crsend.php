<?php
require_once('connection.php');
            $names=$_POST['name1'];
			$address=$_POST['name2'];
			
			
			$insert=mysql_query("INSERT INTO gar(date,cr_type,plac) VALUES(now(),'$names','$address')")or die(mysql_error());
$message="car has been recorded!!";
 print"<script>window.alert('$message');window.location='carform.php';</script>";

?>

