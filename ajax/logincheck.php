<html>
<body>
<?php
$db = mysql_connect('localhost','root','');
$choosedb = mysql_select_db("jquerymobile", $db);
if(isset($_POST["username"]) && isset($_POST["password"])){
$username = $_POST["username"];
$password = $_POST["password"];

$sql = "SELECT * FROM info WHERE username = 'test'"; 
// $sql="INSERT INTO info (username,password) VALUES ('1111','1111')";
$result = mysql_query($sql,$db);
// print_r(mysql_fetch_row($result)); 
while( $row = mysql_fetch_array($result) ){
    
    if($row['username'] == $username && $row['password'] == $password){
        sleep(2);
        // echo "username:".$row['username']."<br />";
        // echo "password:".$row['password']."<br />";
        // echo "welcome:".$row['username'];
        $url = "http://localhost/JQMone/index.php#user";  
        echo "<script type='text/javascript'>";  
        echo "window.location.href='$url'";  
        echo "</script>";          
    }else{
        echo "<script type='text/javascript'>";  
        echo "alert('User does not exist! Please check your enter!')";
        echo "</script>"; 
        $back = "http://localhost/JQMone/index.php";
        echo "<script type='text/javascript'>";  
        echo "window.location.href='$back'";  
        echo "</script>"; 
         
    }
 }  
}
// header("Location: http://localhost/JQMone/index.php#user"); 
// exit;
// mysql_close($choosedb);               
?>

</body>
</html>
