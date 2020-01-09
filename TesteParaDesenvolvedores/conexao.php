<?php
   $server = "localhost";
   $user = "root";
   $pass = "";
   $dbName = "db_vitoriawagen";
   

   $con = mysqli_connect($server, $user, $pass, $dbName)or die(mysql_error($con));

?>