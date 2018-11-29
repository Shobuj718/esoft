<?php   
 //logout.php  
 session_start();  
 session_destroy();  
 header("location:http://localhost/saghataen/view/admin/login/index.php");  
 ?>  