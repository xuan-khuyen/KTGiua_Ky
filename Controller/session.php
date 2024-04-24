<?php
session_start();
$_SESSION["userID"] = "test";

//check user id
$userID = $_SESSION["userID"];
echo "Hello" . " " . $userID;


?>