<?php 
include 'db.php'; 

if(isset($_POST['send'])){
	$name=htmlspecialchars($_POST['task']);
	$sql="insert into tasks (name) values('$name')";
	$rows=$db->query($sql);
	header('location:index.php');
	
}


?>
