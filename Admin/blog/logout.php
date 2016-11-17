<?php 
session_start();
session_unset();
session_destroy();
header("Location:/scan/Admin/index.php");

?>


