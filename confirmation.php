<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
		<link href="https://fonts.googleapis.com/css">
		<link rel="icon" href="photos/WSU_GreenFee.png">
		<link rel="stylesheet" type="text/css" href="option2.css">
		<title>Confirmation</title>
	</head>
	<body>
 		<div id="header">
			<img id="mainInfoPic" src="photos/WinonaWhite.png">		
		</div>

		<div id="greenFeeIntro"></div>
		<div id="checkmarkdiv">
		<!-- 	<img id="checkmark" src="photos/checkmark.png" width="396" height="304" align="middle">		-->
			<svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52"><circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"/><path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"/></svg>
			<h1 id="confirmationh1">Your Submission was successful.</h1>
			<?php
				$querystring = '';
				if(isset($_POST)){	
				foreach ($_POST as $entry)
					{
							$querystring = $querystring.$entry.',';	 
					}
				print $querystring . "<br>";
				//global $_name;
				//$_name = $_POST['name'];
			} ?>
		</div>
		<h2 id="confirmationh2">You may now close the page, Thank you for your time!</h2>
	</body>
</html>