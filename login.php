<?php 
session_start();
$db = new PDO("mysql:dbname=fredsdb;host=localhost", "root", "");
$results = $db->query('SELECT * FROM Login');
$resultArr = $results->fetchAll();

if($_POST['usr'] == $resultArr[0]["Username"] && $_POST['pwd']== $resultArr[0]["Password"]){
	$_SESSION['Name'] = $_POST['usr'];
}
?>
DOCTYPE HTML>

<!--
	Francisco Da Costa
	Student ID: 5026516
	Final Project
-->



<html lang = "en">

	<head>
		<title> Final Project - Index </title>
		<meta charset = "UTF-8">
		<meta name="Author" content="Francisco Da Costa" />
		<meta name="keywords" content="" />
		<meta name="discription" content=""/>
		
		<link rel="stylesheet" type="text/css" href="main-style.css" /> <!-- MAKE STYLE SHEET-->
	</head>
	
	<body>
		<div class="nav-bar-container">
			<div class = "main-menu-item"> <a href="index.php"> Index </a> </div>
			<div class = "main-menu-item"> <a href=""> Login </a> </div>
			
			<?php if(isset($_SESSION['Name'])){ ?>
			<div class = "main-menu-item"> <a href="query.php"> Query </a> </div>
			<?php } ?>
			
			<div class = "main-menu-item"> <a href="about.php"> About </a> </div>
			<div class = "main-menu-item"> <a href="contact.php"> Contact Us </a> </div>
			<div class = "main-menu-item"> <a href="faq.php"> FAQ </a> </div>
			<form accept-charset = "UTF-8" action = "" method = "post">
				<input type = "text" hidden />
			</form>
		</div>
			
			<input type="checkbox" id="nav-trigger" class="nav-trigger" />
			<label for="nav-trigger"></label>	
			
		<div class="site-wrap">
			
			<main>
				<h1>Login</h1>
				<?php
				foreach($results as $result)
				{?>
					ID Number = <?= $result["Client_ID"]?>
				<?php
				}?>
				<p> Please enter your username and password: </p>
				<form accept-charset = "UTF-8" action = "" method = "post">
					Username :<input type = "text" name = "usr" ></input><br>
					Password :<input type = "password" name = "pwd" ></input><br>
					<input type="submit"></input>
				</form>
			</main>
			
			<footer>
				<p> Made by: Francisco Da Costa 4/20/2016 </p>
			</footer>
		</div>
	</body>
</html>	