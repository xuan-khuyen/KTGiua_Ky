<?php

$a = session_id();
if ($a == '') session_start();
//isset — Determine if a variable is declared and is different than null
if (!isset($_SESSION['safety']))
{
    session_regenerate_id(true);
   
    $_SESSION['safety'] = true;
    echo "Hello, session is " . " " . $safety;
}
$_SESSION['sessionid'] = session_id();

?>
<html>

<p>test session</p>

</html>