<?php 

if(!isset($_SESSION['username'])){
    echo "<script>window.location= 'http://localhost/esoft/view/admin/login/index.php'</script>";
}else{
    echo "<script>window.location= 'http://localhost/esoft/view/admin/StudentInfo/allstudent.php'</script>";
}