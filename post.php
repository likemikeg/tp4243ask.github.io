<?php
	session_start();
	
	$db=mysqli_connect("localhost","root","","tp0000");
	
	if(isset($_POST['register_btn'])){
		session_start();
	 
		$username = $_POST['username'];
		$email = $_POST['email'];
		$password =$_POST['password'];
		$eponimo =$_POST['eponimo'];
		$thlefono =$_POST['thlefono'];
		$dieuthinsi =$_POST['dieuthinsi'];
		$polh =$_POST['polh'];
		$sql="INSERT INTO user(id,username ,email ,password) VALUES(12,'$username','$email','$password')";
		
		mysqli_query($db,$sql);
		
		$_SESSION['massage'] ="you are now loged in";
		$_SESSION['username'] =$username;
		header("refresh:2 url=Index.html");
		
	}
?>