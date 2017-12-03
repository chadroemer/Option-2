<?php
	if(isset($_POST['username']) && isset($_POST['password']))
	{
		$dc = "ldap://dc1.winona.edu";
		$dc_connect = ldap_connect($dc);
		$username = $_POST['username'];
		$password = $_POST['password'];
		$dc_connect_user = 'winona' . "\\" . $username;
		ldap_set_option($dc_connect, LDAP_OPT_PROTOCOL_VERSION, 3);
		ldap_set_option($dc_connect, LDAP_OPT_REFERRALS, 0);
		$bind = @ldap_bind($dc_connect, $dc_connect_user, $password);
		if ($bind) 
		{
			$filter="(sAMAccountName=$username)";
			$result = ldap_search($dc_connect,"dc=winona,dc=edu",$filter);
			ldap_sort($dc_connect,$result,"sn");
			$info = ldap_get_entries($dc_connect, $result);
			for ($i=0; $i<$info["count"]; $i++)
			{
				if($info['count'] > 1)
					break;
				echo'<script type="text/javascript" language="JavaScript">window.location.href = "form.php";</script>';
				//echo $info[$i]["description"][0];
				//echo "<p>Welcome <strong> ". $info[$i]["sn"][0] .", " . $info[$i]["givenname"][0] ."</strong><br /> Your username is:  <strong>(" . $info[$i]["samaccountname"][0] .")</strong></p>\n";
			}
			@ldap_close($dc_connect);
		} 
		else 
		{
			$msg = "Invalid username / password";
			echo "<script type='text/javascript'>alert('$msg');</script>";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css">
	<link rel="icon" href="photos/greenFee.png">
	<link rel="stylesheet" type="text/css" href="option2.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<title>Green Fee Application</title>
</head>
<body class="index">
	
	<div id="header">
		<img id="mainInfoPic" src="photos/WinonaWhite.png">		
	</div>
																<!-- begin index content -->
<div id="content">
	<div class="indexMain" id="leftIndex">

		<div id="greenFeeIntroIndex">
		<br>
		<h2 id="greenFeeh2">WSU Student Green Fee Grant Application <i class="fa fa-leaf" aria-hidden="true"></i></h2>

			<p>The <span>WSU Student Green Fee (SGF)</span> provides funding for projects that promote environmental sustainability and enhance the student experience at WSU.  SGF funding will be allocated to projects that increase the use of renewable energy on campus and/or in the local community, increase the energy efficiency of our facilities, reduce the amount of waste created and material resources used on campus, encourage sustainable behaviors, and integrate sustainability into teaching, research, operations, buildings and grounds management at WSU. The All-University Sustainability Committee administers the SGF.
			</p>

			<p><strong><u>Application Instructions:</u></strong></p>

			<p>Please review the <a href="http://cs.winona.edu/Francioni/WSU-green_files/SGF-project-guidelines.pdf" target="_blank">Student Green Fee Project Application Guidelines</a> before submitting your application. It is also recommended that you contact the Sustainability Director in advance of the application deadline to talk through your application before you submit it. Contact:
			</p>

			<p id="contactInfo">
				Nathan Engstrom<br>
				Sustainability Director<br>
				(507) 457-2395 <br>
				<a href="mailto:nengstrom@winona.edu?subject=SGF%20application">NEngstrom@winona.edu</a>
			</p>

			<p>When you are ready to fill out your application, please answer the questions in this form. You should submit additional documentation (e.g., letters of support, maps, drawings, budget, etc.) via email to <a href="mailto:nengstrom@winona.edu?subject=SGF%20application">NEngstrom@winona.edu.</a>
			</p>

			<p><strong>You may save and continue working on the application at a later date, for up to ONE MONTH.</strong></p>

			<hr id="introHr">
			<br>
			<p id="credit">Survey made by WSU CS-344 class 11/1/2017</p>
	</div>
		
	</div>
	<div class="indexMain" id="rightIndex">
		<div id="loginForm">
			<p>Green Fee Portal Login</p>
			<!-- <p>Green Fee Portal Login</p> -->
			<hr>
			<form method="POST"> 
				<p><i class="fa fa-user" aria-hidden="true"></i> Please type in StarID/Username: </p>
				<input type="text" name="username" id="inputSizeIndex" placeholder="Username">
				<p><i class="fa fa-unlock-alt" aria-hidden="true"></i> Please type in Password: </p>
				<input type="Password" name="password" id="inputSizeIndex" placeholder="Password">
				<br><br>
				<button id="loginButton" type="submit" formaction="#">Login <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></button>
			</form>
		</div>
	</div>
</div>
	<!-- ʕ•́ᴥ•̀ʔ -->
</body>
</html>