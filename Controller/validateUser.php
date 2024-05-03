<?php
session_start();
$_SESSION['isLogin'] = false;
//include '/Model/dbConnection.php';

$user = $_REQUEST["userNameLogin"];
$pass = $_REQUEST["passWordLogin"];



echo $user;
if ($user =="admin"){
    
    $_SESSION['isLogin'] = true;
}
//Truy xuat gia tri tu bien Session
$isLogin = $_SESSION['isLogin'];
echo "isLogin=".$isLogin;
if ($isLogin){
   // $_SESSION($user) ;
   $yourURL="/View/content.htm";
    echo ("<script>location.href='$yourURL'</script>");
  
}
else {
   
    echo "window.location.href='/workspaces/WebPhpDev/index.php'";
}
?>
