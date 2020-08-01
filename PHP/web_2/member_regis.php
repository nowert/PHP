<?php require_once('Connections/dbcon.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {
  $insertSQL = sprintf("INSERT INTO member (mem_nm, mem_user, mem_pass) VALUES (%s, %s, %s)",
                       GetSQLValueString($_POST['mem_nm'], "text"),
                       GetSQLValueString($_POST['mem_user'], "text"),
                       GetSQLValueString($_POST['mem_pass'], "text"));

  mysql_select_db($database_dbcon, $dbcon);
  $Result1 = mysql_query($insertSQL, $dbcon) or die(mysql_error());
echo "<meta http-equiv=\"refresh\" content=\"3;URL=index.php?sele=index\">";

}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="jquery/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<title>Untitled Document</title>
</head>

<body>
<?php include("test30.php"); ?>
<center>
<span class="glyphicon glyphicon-shopping-cart" style="font-size:24px;"></span>&emsp;<br>
<span style="font-size:24px;">SHOPPING</span>
</center>
<form method="post" name="form1" action="<?php echo $editFormAction; ?>">
  <table align="center">
    <tr valign="baseline">
      <td nowrap align="right">ชื่อ-นามสกุล:</td>
      <td><input type="text" name="mem_nm" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">ชื่อผู้ใช้:</td>
      <td><input type="text" name="mem_user" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">รหัสผ่าน:</td>
      <td><input type="text" name="mem_pass" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">&nbsp;</td>
      <td><input type="submit" value="Insert record"></td>
    </tr>
  </table>
  <input type="hidden" name="MM_insert" value="form1">
</form>
<p>&nbsp;</p>
</body>
</html>