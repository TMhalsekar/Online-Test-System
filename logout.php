<?php
session_start();
if(!empty($_SESSION['user'])){
unset($_SESSION['user']);
header('location:index.php');
}
else{
	header('location:index.php');
}
?>