<html>
<body>

<?php
if(isset($_POST["title"]) && isset($_POST["description"]) && isset($_POST["time"])){
$link=mysql_connect('localhost','root','');
mysql_select_db('jquerymobile',$link) or die(mysql_error());
// mysql_query("set names utf8");
// echo "<script language=\"JavaScript\">alert(\"Congradulation! Create account successful!\");</script>";
$title = $_POST["title"];
$description = $_POST["description"];
$time = $_POST['time'];
// $username ="1234";
// $password ="4321";
// echo $username;
// echo $password;
$sql="INSERT INTO detail (title,description,time) VALUES ('$title','$description','$time')";
mysql_query($sql);
}

?>
</body>
</html>