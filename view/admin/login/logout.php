<?php   
 //logout.php  
 session_start();  
 session_destroy();  
 header("location:http://localhost/esoft/view/admin/login/index.php");  
 ?>  