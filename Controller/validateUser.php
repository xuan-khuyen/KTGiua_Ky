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
While ($isLogin){
    $_SESSION("user") ;
    header("Location: /workspaces/WebPhpDev/View/content.htm");
  

}
While(!$isLogin){
    header("Location: /workspaces/WebPhpDev/index.php");
}
?>
