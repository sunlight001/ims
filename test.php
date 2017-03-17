<?php
header("Content-type: text/html; charset=utf-8"); 


$con = mysqli_connect('localhost','root','123456') or die(mysqli_connect_error());

if($con) {
	echo 'link on';
}else{
	echo 'error';
}



?>