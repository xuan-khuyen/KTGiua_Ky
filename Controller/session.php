<?php
/*
session_start();
$id = session_id();
echo "Session Id: ".$id ;
*/

   session_start();
   $id = session_id();
    
   if( isset( $_SESSION['counter'] ) ) {
      $_SESSION['counter'] += 1;
   } else {
      $_SESSION['counter'] = 1;
   }
   $msg = "Number of visits in this session: ".  $_SESSION['counter'];

   echo "Session Id: ".$id . " " ;
 
   echo "$msg";



?>
<html>

<p>test session</p>

</html>