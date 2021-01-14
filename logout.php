<?php  
require_once("action/core.php");
session_unset(); //to remove all session var
session_destroy();//to destroy sessiom...
header("location:http://localhost/inventory_system/index.php");
?>