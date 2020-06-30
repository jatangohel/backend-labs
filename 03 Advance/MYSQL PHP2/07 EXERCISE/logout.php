<!-- PHP script to destroy the session. -->
<?php
   session_start();

   if(session_destroy()) {

       header("Location: login.php");
   }
?>
