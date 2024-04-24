<?php
session_start();
$_SESSION["userID"] = "test";

//check user id
$userID = $_SESSION["userID"];
echo "Hello" . " " . $userID;

//session_destroy();
//$userID = $_SESSION["userID"];

//Huy bien session

unset($_SESSION["userID"]);

echo "Hello, session is closed" . " " . $userID;


?>