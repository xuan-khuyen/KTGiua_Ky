<?php

include '/Model/dbConnection.php';

$user = $_REQUEST["userNameLogin"];
$pass = $_REQUEST["passWordLogin"];



echo $user;
if ($user =="admin"){
    $_SESSION("isLogin") = true;
}

While ($isLogin){
    $_SESSION("user") ;
    header("Location: /workspaces/WebPhpDev/View/content.htm");
  

}
While(!$isLogin){
    header("Location: /workspaces/WebPhpDev/index.php");
}
?>
