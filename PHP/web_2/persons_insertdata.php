<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="jquery/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<title>Untitled Document</title>
<?php
	error_reporting(E_ALL);
	ini_set('display_errors', 0);
$servername="localhost";
$username="root";
$password="1234";
$dbname="dbmarket";

$conn=new mysqli($servername,$username,$password,$dbname);
if($_POST["adddata"]){
$sql="INSERT INTO persons(ID, name, tel, address)VALUES('".$_POST[ID]."','".$_POST[name]."','".$_POST[tel]."','".$_POST[address]."')";
$query=mysqli_query($conn,$sql);

if($query){
	echo "<center><br>สมัครสมาชิกสำเร็จ</center>";
	}
	else{
	echo "<center><br>สมัครไม่สำเร็จ</center>";	
		}
}
?>
<style type="text/css">
form {
	text-align: center;
	color: #D6D6D6;
}
body p {
	color: #666699;
}
</style>
</head>

<body>
<?php include("test30.php"); ?>
<div class="container">
<form action="" method="post">

 <div class="row">
  <h1><p>REGISTER</p></h1>
  
 </div>
 
 <br>
 <center>
 <div class="row">
 <div class="col-xs-2">
  <p><strong>ID : 
 </div>
  <div class="col-xs-2">
    <input type="text" name="ID" id="textfield2" />
  </strong></p>
  </div>
  </div>
  </center>
  
  <p><strong>name : 
    <input type="text" name="name" id="textfield3" />
  </strong></p>
  <p><strong>tel : 
    <input type="text" name="tel" id="textfield4" />
  </strong></p>
  
  <p><strong>
    address : 
    <input type="text" name="address" id="textfield5" />
  </strong></p>
  
  <p>
    <strong>
    <input type="submit" name="adddata" id="button" value="สมัครสมาชิก" />
  </strong></p>
  
  <p>&nbsp;</p>
  <h2>
    <p><a href="index30.php">กลับสู่หน้าหลัก</a></p></h2>
</form>
</div>
</body>
</html>