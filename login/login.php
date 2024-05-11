<?php 
$username = $_POST['username'];
$password = $_POST['password'];

$login = mysql_query("select *from user where username = '$username' and password = '$password' ")
$cek = mysqli_num_rows($login);

if($cek > 0){
    session_start();
    $_SESSION['username'] = $username;
    header("location:google.com");
}else{  
    header("location:index.php");
}

?>
