<?php
session_start();
$conn = mysqli_connect("localhost:3366","root","","MYPHAM");
$sql = ' DELETE FROM  USERS WHERE id ='.$_GET['idkh'];
$result = mysqli_query($conn,$sql);
header("Location:adminKH.php");
?>