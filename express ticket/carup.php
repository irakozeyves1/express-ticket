

<center>

<?php include("connection.php");?>
<?php
$id=$_REQUEST['cr_id'];
$result=mysql_query("select * from gar where cr_id='$id'")or die(mysql_error());
$rows=mysql_fetch_array($result);
$code=$rows['date'];
$price=$rows['cr_type'];
$cod=$rows['plac'];


 if (isset($_POST['Submit']))
 {
$code=$_REQUEST['date'];
$price=$_REQUEST['name1'];
$cod=$_REQUEST['name2'];


mysql_query("UPDATE gar SET date='$code',cr_type='$price',plac='$cod' WHERE cr_id='$id';")or die(mysql_error());
include("carupdate.php");

}
else
{

?>

<br />
<br />
<br />
<br />
<p align="center"><font size="+3" color="#9900FF"><strong>UPDATE CAR</strong></font></p>
<form ACTION="<?php $_PHP_SELF ?>" METHOD="post">
<table bgcolor="#9900FF">
			<tr >
				<th><label FOR="input-one"><strong>date:</strong></label></th>
				<td><input  NAME="date" TYPE="text" SIZE="30" VALUE="<?php print$code?>"></td>
			</tr>	
			<tr BGCOLOR="#9900FF">
				<th><label FOR="input-one"><strong>Model:</strong></label></th>
				<td><input  NAME="name1" TYPE="text" SIZE="30" VALUE="<?php print$price?>"></td>
			</tr>	
			
			<tr BGCOLOR="#9900FF">
				<th><label FOR="input-one"><strong>Plate Number:</strong></label></th>
				<td><input  NAME="name2" TYPE="text" SIZE="30" VALUE="<?php print$cod?>"></td>
			</tr>	
			
			
				<tr BGCOLOR="#9900FF">
				<td  COLSPAN="2" ALIGN="center"><button TYPE="submit" NAME="Submit">Update</button></td>
			</tr> 
		</table>
</form>
</body>
</html>
 <?php
 }
 ?>
 </center>
 
