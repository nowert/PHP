<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scela=1">
<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="jquery/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<title>Untitled Document</title>
<style>
p{
	padding-left:50px;
	font-size:18px;
	}
button{
	width:100px;
	}
</style>
</head>

<body>
<?php include("test30.php"); ?>
<?php
$servername = "localhost";
$username = "root";
$password = "1234";
$dbname	= "img_test";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
$sql = "SELECT * FROM img";
$result = $conn->query($sql);
 if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<img src=\"data:image;base64,".base64_encode($row["img"])."\"";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
</body>
</html>