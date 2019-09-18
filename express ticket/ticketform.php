<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>capital managment</title>


<?php require_once("authi.php");
 ?>

</head>

<body bgcolor="#CCCCFF">
 
 
 
 
 
 
 <div style="background-color:#000099; width:800px; height:500px; border-style:ridge; border-bottom-style:inset; border-collapse:collapse; margin:0px auto 0px auto">
 
<div style="background-color:#FF99FF; width:800px; height:140px"><img src="phot/head.jpg"</div>
<div style="background-color:#000099; width:800px; height:40px"> <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>


<style type="text/css" media="screen">
body{ behavior:url("csshover2.htc"); }
.pd_menu_01 {float:left; padding:0; margin:0;color: #FFFFFF;background: #0000A0;width:100%; border:solid 1px #004080;clear:both;} /*Color navigation bar normal mode*/
.pd_menu_01  a, .pd_menu_01 a:visited {
font-family:Arial, Helvetica, sans-serif;
font-style:normal;
font-weight:bold;
font-size:12px;
color: #FFFFFF;
background-color: #0000A0;
text-decoration: none;
}
.pd_menu_01 ul {list-style-type:none;padding:0; margin:0;}
.pd_menu_01 ul li {float:left; position:relative; z-index:auto !important ; z-index:1000 ; border-right:solid 1px #004080; border-left:solid 1px #004080;}
.pd_menu_01 ul li a {color: #FFFFFF;background: #0000A0;float:none !important ; float:left ; display:block; height:30px; line-height:30px; padding:0 10px 0 10px; text-decoration:none; }
.pd_menu_01 ul li ul {display:none; border:none;color: #FFFFFF;background: #0000A0; width:1px}
.pd_menu_01 ul li:hover a {background-color:#008000; text-decoration:none; color:#FFFF00;} /*Color main cells hovering mode*/
.pd_menu_01 ul li:hover ul {display:block;  position:absolute; z-index:999; top:29px; margin-top:1px; left:0;}
.pd_menu_01 ul li:hover ul li a {display:block; width:12em; height:auto; line-height:1.3em; margin-left:-1px; padding:5px 10px 5px 10px; border-left:solid 1px #004080; border-bottom: solid 1px #004080; background-color:#0000FF;  color:#FFFFFF;} /*Color subcells normal mode*/
.pd_menu_01 ul li:hover ul li a:hover {background-color:#CA0000; text-decoration:none;color:#FFFF00;} /*Color subcells hovering mode*/
.pd_menu_01 ul li a:hover {background-color:#008000; text-decoration:none;color:#FFFF00;} /*Color main cells hovering mode*/
.pd_menu_01 ul li a:hover ul {display:block; width:12em; position:absolute; z-index:999; top:29px; left:0; }
.pd_menu_01 ul li ul li a:visited { background-color:#0000FF;  color:#FFFFFF;} /*Color subcells normal mode*/
.pd_menu_01 ul li a:hover ul li a {display:block; width:12em; height:1px; line-height:1.3em; padding:4px 16px 4px 16px; border-left:solid 1px #004080; border-bottom: solid 1px #004080; background-color:#0000FF;  color:#FFFFFF;} 
.pd_menu_01 ul li a:hover ul li a:hover {background-color:#CA0000; text-decoration:none;color:#FFFF00;} /*Color subcells hovering mode*/
</style>
</head>
<body>

<div class="pd_menu_01 "> 
<ul><li><a href="home.php">HOME</a>
</li></ul>

<ul><li><a href="#">REGISTRATION</a>
<ul>
<li><a href="WORKERFORM.php" >worker</a></li>
<li><a href="carform.php"  >car</a></li>
<li><a href="ticketform.php"  >ticket</a></li>

</ul>
</li></ul>

<ul><li><a href="#">VIEW</a>
<ul>
<li><a href="workerupdate.php"  >worker</a></li>
<li><a href="carupdate.php">car</a></li>
<li><a href="ticketupdate.php" >ticket</a></li>

</ul>
</li></ul>



<ul><li><a href="index.php">LOGOUT</a>

</div>

</body>
</html>
</div>
<?php
require_once('connection.php');
$category=mysql_query("select * from gar")or die(mysql_error());

?>



<div style="width:800px; height:280px; background:#00CCFF; margin:0px auto 0px auto"><center><h1 style="table-layout:auto; color:#663333;">TICKET BOOKING</h1></center><form action="ticketsend.php" method="post">
<center><table>
<tr><td>Passenger names:</td><td><input type="text" name="name1"></td></tr>
<tr><td>Time:</td><td><input type="text" name="name2"></td></tr>

<tr><td>Trip:</td><td><select name="name3">
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
  </select></td></tr>
<tr><td>Price:</td><td><input type="text" name="name4"></td></tr>
 


<tr><td><b>plate Number</b></td>
<td><select type="text" name="name5" style="background-color:#d7d7d7" REQUIRED/>
                    <?php  while($rows=mysql_fetch_array($category))

{ ?>
<option value="<?php print$rows['cr_id']; ?>"><?php print$rows['plac'];
?>
<?php
}?>
	

<font color="#66CCFF"><tr><td></td><td bordercolor="#66CCFF"><button type="submit" name="Submit" value="submit"> SAVE</button></td></tr></font>
</form></table></center></div>
<div style="width:800px; height:20px; background-color:#999900;"><center><b>Designed and Developed   by	DUSABUWERA Henriette in 2016 in S6(C.S.M)
</b></center></div>
</body>
</html>


