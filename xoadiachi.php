<?php
session_start();
if(isset($_SESSION['address-infor'])) {
unset($_SESSION['address-infor']);  
header("Location: diachi.php");
exit();
}
?>