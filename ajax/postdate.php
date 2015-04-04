<html>
<body>
<?php
	$db = mysql_connect('localhost','root','');
	$choosedb = mysql_select_db("jquerymobile", $db);
	if(isset($_POST["datef"])){
	$datef = $_POST["datef"];
	}
	$sql="INSERT INTO datef (Dateone) VALUES ('$datef')";
	mysql_query($sql);
            
?>
</body>
</html>