

<center>

<?php include("connection.php");?>
<?php
$id=$_REQUEST['w_id'];
$result=mysql_query("select * from worker where w_id='$id'")or die(mysql_error());
$rows=mysql_fetch_array($result);
$code=$rows['date'];
$price=$rows['w_fname'];
$cod=$rows['w_lname'];
$pri=$rows['address'];
$dada=$rows['gender'];
$bg=$rows['telephone'];
$sos=$rows['salary'];

 if (isset($_POST['Submit']))
 {
$code=$_REQUEST['date'];
$price=$_REQUEST['name1'];
$cod=$_REQUEST['name2'];
$pri=$_REQUEST['name3'];
$dada=$_REQUEST['name4'];
$bg=$_REQUEST['name5'];
$sos=$_REQUEST['name6'];

mysql_query("UPDATE worker SET date='$code',w_fname='$price',w_lname='$cod',address='$pri',gender='$dada',telephone='$bg',salary='$sos' WHERE w_id='$id';")or die(mysql_error());
include("workerupdate.php");

}
else
{

?>

<br />
<br />
<br />
<br />
<p align="center"><font size="+3" color="#9900FF"><strong>UPDATE WORKER</strong></font></p>
<form ACTION="<?php $_PHP_SELF ?>" METHOD="post">
<table bgcolor="#9900FF">
			<tr >
				<th><label FOR="input-one"><strong>date:</strong></label></th>
				<td><input  NAME="date" TYPE="text" SIZE="30" VALUE="<?php print$code?>"></td>
			</tr>	
			<tr BGCOLOR="#9900FF">
				<th><label FOR="input-one"><strong>first name:</strong></label></th>
				<td><input  NAME="name1" TYPE="text" SIZE="30" VALUE="<?php print$price?>"></td>
			</tr>	
			
			<tr BGCOLOR="#9900FF">
				<th><label FOR="input-one"><strong>last name:</strong></label></th>
				<td><input  NAME="name2" TYPE="text" SIZE="30" VALUE="<?php print$cod?>"></td>
			</tr>	
			<tr BGCOLOR="#9900FF">
				<th><label FOR="input-one"><strong>address:</strong></label></th>
				<td><input  NAME="name3" TYPE="text" SIZE="30" VALUE="<?php print$pri?>"></td>
			</tr>	
			
			
			<tr BGCOLOR="#000000">
			<th><label FOR="input-one"><strong><font color="#FFFFFF">Gender:</font></strong></label></td><td><select name="name4">
    <option value="Male">Male</option>
    <option value="Female">Female</option>
	 
  </select><?php print$dada?>"></td></tr>
			<tr BGCOLOR="#9900FF">
				<th><label FOR="input-one"><strong>telephone:</strong></label></th>
				<td><input  NAME="name5" TYPE="text" SIZE="30" VALUE="<?php print$bg?>"></td>
			</tr>	
			<tr BGCOLOR="#9900FF">
				<th><label FOR="input-one"><strong>salary:</strong></label></th>
				<td><input  NAME="name6" TYPE="text" SIZE="30" VALUE="<?php print$sos?>"></td>
			</tr>	
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
 
