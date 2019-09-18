

<center>

<?php include("connection.php");?>
<?php
$id=$_REQUEST['t_id'];
$result=mysql_query("select * from ticket where t_id='$id'")or die(mysql_error());
$rows=mysql_fetch_array($result);
$code=$rows['date'];
$price=$rows['tr_names'];
$cod=$rows['time'];
$pri=$rows['destination'];
$dada=$rows['price'];

 if (isset($_POST['Submit']))
 {
$code=$_REQUEST['date'];
$price=$_REQUEST['name1'];
$cod=$_REQUEST['name2'];
$pri=$_REQUEST['name3'];
$dada=$_REQUEST['name4'];

mysql_query("UPDATE ticket SET date='$code',tr_names='$price',time='$cod',destination='$pri',price='$dada' WHERE t_id='$id';")or die(mysql_error());
include("ticketupdate.php");

}
else
{

?>

<br />
<br />
<br />
<br />
<p align="center"><font size="+3" color="#9900FF"><strong>UPDATE TICKET</strong></font></p>
<form ACTION="<?php $_PHP_SELF ?>" METHOD="post">
<table bgcolor="#9900FF">
			<tr >
				<th><label FOR="input-one"><strong>date:</strong></label></th>
				<td><input  NAME="date" TYPE="text" SIZE="30" VALUE="<?php print$code?>"></td>
			</tr>	
			<tr BGCOLOR="#9900FF">
				<th><label FOR="input-one"><strong>names:</strong></label></th>
				<td><input  NAME="name1" TYPE="text" SIZE="30" VALUE="<?php print$price?>"></td>
			</tr>	
			
			<tr BGCOLOR="#9900FF">
				<th><label FOR="input-one"><strong>time:</strong></label></th>
				<td><input  NAME="name2" TYPE="text" SIZE="30" VALUE="<?php print$cod?>"></td>
			</tr>	
			<tr BGCOLOR="#000000">
			<th><label FOR="input-one"><strong><font color="#FFFFFF">Trip:</font></strong></label></td><td><select name="name3">
    <option value="Kigal-Karongi">Kigal-Karongi</option>
    <option value="Karingi-Kigali">Karingi-Kigali</option>
	  <option value="Kigali-Rusizi">Kigali-Rusizii</option>
    <option value="Rusizi-Kigali">Rusizi-Kigali</option>
	<option value="Kigali-muhanga">Kigali-muhanga</option>
    <option value="muhanga-Kigali">muhanga-Kigali</option>
	  <option value="Kigali-Nyamasheke">Kigali-Nyamasheke</option>
    <option value="Nyamasheke-Kigali">Nyamasheke-Kigali</option>
	<option value="Kigali-Nyanza">Kigali-Nyanza</option>
    <option value="Nyanza-Kigali">Nyanza-Kigali</option>
  </select><?php print$pri?>"></td></tr>
			
			
			<tr BGCOLOR="#9900FF">
				<th><label FOR="input-one"><strong>price:</strong></label></th>
				<td><input  NAME="name4" TYPE="text" SIZE="30" VALUE="<?php print$dada?>"></td>
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
 
