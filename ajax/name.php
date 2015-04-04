<html>
<body>

<?php
if(isset($_POST["username"]) && isset($_POST["password"])){
$link=mysql_connect('localhost','root','');
mysql_select_db('jquerymobile',$link) or die(mysql_errno());
// mysql_query("set names utf8");
// echo "<script language=\"JavaScript\">alert(\"Congradulation! Create account successful!\");</script>";
$username = $_POST["username"];
$password = $_POST["password"];
// $username ="1234";
// $password ="4321";
// echo $username;
// echo $password;
$sql="INSERT INTO info (username,password) VALUES ('$username','$password')";
mysql_query($sql);

}
?>
</body>
</html>