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
//echo "isLogin=".$isLogin;
if ($isLogin){
   // $_SESSION($user) ;
   $content="/View/content.htm";
   echo ("<script>location.href='$content'</script>");
  
}
else {
    
    echo $user. " or ". $pass. "is incorrect";
 
}
?>
