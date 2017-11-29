<?php
		$root="root"; 
		$root_password = "";
		$host="localhost"; 
		$user='GreenUser';
		$pass='GreenPass'; 
		$db="344db";
		$servername = "localhost";

		try {
		     $dbh = new PDO("mysql:host=$servername", $root, $root_password);

		        $dbh->exec("CREATE DATABASE IF NOT EXISTS `$db`;
                CREATE USER '$user'@'localhost' IDENTIFIED BY '$pass';
                GRANT ALL PRIVILEGES ON `$db`.* TO '$user'@'localhost';
                FLUSH PRIVILEGES;") 
        or die(print_r($dbh->errorInfo(), true));
		    } catch (PDOException $e) {
		        die("DB ERROR: ". $e->getMessage());
		}
?>

<?php
		$conn = new PDO("mysql:host=$servername;dbname=$db", $user, $pass);

		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	try {
		$sql = "CREATE TABLE IF NOT EXISTS `admin` ( `user_id` varchar(45) NOT NULL PRIMARY KEY,
			`rank` int(11) DEFAULT NULL COMMENT '1:Admin\n2:Reviewer\n3:Both',
			`date` date DEFAULT NULL)";
			$conn->exec($sql);
		
		}catch (PDOException $e) {
			  echo $sql . "<br>" . $e->getMessage();
		}
		try {
		$sql = "LOCK TABLES `admin` WRITE";
		$conn->exec($sql);
	}catch (PDOException $e) {
			  echo $sql . "<br>" . $e->getMessage();
		}
	$conn = null;
?>
<?php
$conn = new PDO("mysql:host=$servername;dbname=$db", $user, $pass);

		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

try {
	$sql ="CREATE TABLE IF NOT EXISTS `advisor` ( `a_name` varchar(100) NOT NULL PRIMARY KEY,
	`email` varchar(320) DEFAULT NULL,`dept` varchar(45) DEFAULT NULL,
	`phone` varchar(10) DEFAULT NULL)";
	$conn->exec($sql);
		} catch (PDOException $e) {
			 echo $sql . "<br>" . $e->getMessage();
		}
		try {
		$sql = "LOCK TABLES `advisor` WRITE";
		$conn->exec($sql);
	}catch (PDOException $e) {
			  echo $sql . "<br>" . $e->getMessage();
		}
		$conn = null;
?>
<?php
$conn = new PDO("mysql:host=$servername;dbname=$db", $user, $pass);

		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	try {
		$sql = "CREATE TABLE IF NOT EXISTS `answer`
		( `user_id` varchar(45) NOT NULL,
		`question_id` varchar(45) NOT NULL,
		`project_id` varchar(45) NOT NULL,
		`answer` varchar(999) DEFAULT NULL,
		`comment` varchar(999) DEFAULT NULL,
		PRIMARY KEY (`user_id`,`question_id`,`project_id`))";
			$conn->exec($sql);
		} catch (PDOException $e) {
			echo $sql . "<br>" . $e->getMessage();
		}
	try {
		$sql = "LOCK TABLES `answer` WRITE";
			$conn->exec($sql);
	} catch (PDOException $e) {
		echo $sql . "<br>" . $e->getMessage();
	}
	$conn = null;

?>
<?php
$conn = new PDO("mysql:host=$servername;dbname=$db", $user, $pass);

		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	try {
			$sql = "CREATE TABLE IF NOT EXISTS `project`
  				( `id` varchar(45) NOT NULL,
  				`user_id` varchar(45) NOT NULL,
  				`advisor_name` varchar(100) DEFAULT NULL,
  				`group_name` varchar(100) DEFAULT NULL,
  				`title` varchar(350) DEFAULT NULL,
  				`amount` DOUBLE DEFAULT NULL,
  				`contact_name` varchar(100) DEFAULT NULL,
  				`group` varchar(100) DEFAULT NULL,
  				`completed` tinyint(4) DEFAULT NULL,
  				PRIMARY KEY (`id`, `user_id`))";
  				$conn->exec($sql);

		} catch (PDOException $e) {
		echo $sql . "<br>" . $e->getMessage();
	}
	try {
		$sql = "LOCK TABLES `project` WRITE";
			$conn->exec($sql);
	} catch (PDOException $e) {
		echo $sql . "<br>" . $e->getMessage();
	}
	$conn = null;
?>

<?php
$conn = new PDO("mysql:host=$servername;dbname=$db", $user, $pass);

		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	try {
	$sql = "CREATE TABLE IF NOT EXISTS `question` ( `id` varchar(45) NOT NULL PRIMARY KEY,
	`text` varchar(999) DEFAULT NULL,`type` varchar(7) DEFAULT NULL COMMENT 
	'This is important, the types are project, budget, 
	and review and they correlate to the different phases of our proposal lifecycle')";
	$conn->exec($sql);
		} catch (PDOException $e) {
		echo $sql . "<br>" . $e->getMessage();
	}
	try {
		$sql = "LOCK TABLES `question` WRITE";
			$conn->exec($sql);
	} catch (PDOException $e) {
		echo $sql . "<br>" . $e->getMessage();
	}
	$conn = null;

?>
<?php
$conn = new PDO("mysql:host=$servername;dbname=$db", $user, $pass);

		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		try{
	$sql = "CREATE TABLE IF NOT EXISTS `review`
  		( `project_id` varchar(45) NOT NULL,
 		`user_id` varchar(45) NOT NULL,
 		`r_name` varchar(100) DEFAULT NULL,
 		`affiliation` tinyint(4) DEFAULT NULL,
 		`comments` varchar(999) DEFAULT NULL,
 		`completed` tinyint(4) DEFAULT NULL,
 		PRIMARY KEY (`project_id`,`user_id`))";
 		$conn->exec($sql);
		} catch (PDOException $e) {
		echo $sql . "<br>" . $e->getMessage();
	}
	try {
		$sql = "LOCK TABLES `review` WRITE";
			$conn->exec($sql);
	} catch (PDOException $e) {
		echo $sql . "<br>" . $e->getMessage();
	}
?>
<?php
$conn = new PDO("mysql:host=$servername;dbname=$db", $user, $pass);

		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		try{
	$sql = "CREATE TABLE IF NOT EXISTS `user` 
	( `id` varchar(45) NOT NULL PRIMARY KEY,
	`u_name` varchar(100) DEFAULT NULL, 
	`campus_affiliation` varchar(45) DEFAULT NULL,
	`email` varchar(45) DEFAULT NULL,
	`phone_primary` varchar(45) DEFAULT NULL,
	`status` varchar(7) DEFAULT NULL)";
	$conn->exec($sql);
		} catch (PDOException $e) {
		echo $sql . "<br>" . $e->getMessage();
	}
	try {
		$sql = "LOCK TABLES `user` WRITE";
			$conn->exec($sql);
	} catch (PDOException $e) {
		echo $sql . "<br>" . $e->getMessage();
	}
?>

<?php
	for ($i=0; $i < 1; $i++) { 
		
	
		$conn = new PDO("mysql:host=$servername;dbname=$db", $user, $pass);

		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	try {
		$sql = "ALTER TABLE `answer` ADD CONSTRAINT `fk_answer_project1` FOREIGN KEY (`project_id`) REFERENCES `project`(`id`) ON DELETE NO ACTION ON UPDATE NO ACTION";
		$conn->exec($sql);

	}  catch (PDOException $e) {
		
	}
}
?>
<?php

		$conn = new PDO("mysql:host=$servername;dbname=$db", $user, $pass);

		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	try {
		$sql = "ALTER TABLE `answer` ADD CONSTRAINT `fk_answer_question1` FOREIGN KEY (`question_id`) REFERENCES `question` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION";
		$conn->exec($sql);
		}  catch (PDOException $e) {
	
	}
?>
<?php
		$conn = new PDO("mysql:host=$servername;dbname=$db", $user, $pass);

		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	try {
		$sql = "ALTER TABLE `answer` ADD CONSTRAINT `fk_answer_user1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION";
		$conn->exec($sql);
		}  catch (PDOException $e) {

	}
?>
<?php
		$conn = new PDO("mysql:host=$servername;dbname=$db", $user, $pass);

		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	try {
		$sql = "ALTER TABLE `project` ADD CONSTRAINT `fk_project_advisor1` FOREIGN KEY (`advisor_name`) REFERENCES `advisor` (`a_name`) ON DELETE NO ACTION ON UPDATE NO ACTION";
		$conn->exec($sql);
		}  catch (PDOException $e) {
		
	}
?>
<?php
		$conn = new PDO("mysql:host=$servername;dbname=$db", $user, $pass);

		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	try {
		$sql = "ALTER TABLE `project` ADD CONSTRAINT `fk_project_user1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION";
		$conn->exec($sql);
		}  catch (PDOException $e) {
		
	}
?>
<?php
		$conn = new PDO("mysql:host=$servername;dbname=$db", $user, $pass);

		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	try {
		$sql = "ALTER TABLE `review` ADD CONSTRAINT `fk_review_project1` FOREIGN KEY (`project_id`) REFERENCES `project` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION";
		$conn->exec($sql);
		}  catch (PDOException $e) {

	}
?>
<?php
		$conn = new PDO("mysql:host=$servername;dbname=$db", $user, $pass);

		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	try {
		$sql = "ALTER TABLE `project` ADD CONSTRAINT `fk_review_user1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION";
		$conn->exec($sql);
		}  catch (PDOException $e) {
	
	}
?>
<?php
		$conn = new PDO("mysql:host=$servername;dbname=$db", $user, $pass);

		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	try {
		$sql = "ALTER TABLE `admin` ADD CONSTRAINT `fk_admin_user1` FOREIGN KEY (`user_id`) REFERENCES `user`(`id`) ON DELETE NO ACTION ON UPDATE NO ACTION";
		$conn->exec($sql);

	}  catch (PDOException $e) {
	
	}
?>

													<!-- END PHP INTRO AND BEGIN HTML CONTENT -->

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
		<link href="https://fonts.googleapis.com/css">
		<link rel="icon" href="photos/WSU_GreenFee.png">
		<link rel="stylesheet" type="text/css" href="option2.css">
		<title>Confirmation</title>
	</head>
	<body>

													<!-- BEGIN BODY -->

 		<div id="header">
			<img id="mainInfoPic" src="photos/WinonaWhite.png">		
		</div>

		<div id="greenFeeIntro"></div>
		<div id="checkmarkdiv">
		<!-- 	<img id="checkmark" src="photos/checkmark.png" width="396" height="304" align="middle">		-->
			<svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52"><circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"/><path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"/></svg>
			<h1 id="confirmationh1">Your Submission was successful.</h1>
				<?php
						
						if(isset($_POST)){	
						foreach ($_POST as $entry)
							{
									$querystring = $_POST;

							}
					
						//global $_name;
						//$_name = $_POST['name'];
						} 
				?>
			</h1>
	</div>
<?php
		
		$amount = $_POST["Amount"];
		$campusAffiliation = $_POST["campusAffiliation"];
		$email = $_POST["email"];
		$status = $_POST["status"];
		$ideaOrigin = $_POST["ideaOrigin"];
		$groupName = $_POST["groupName"];
		$staffAdvisor = $_POST["staffAdvisor"];
		$advisorEmail = $_POST["advisorEmail"];
		$advisorDept = $_POST["advisorDept"];
		$advisorPhone = $_POST["advisorPhone"];
		$u = $_POST["user_id"];
		$un = $_POST["u_name"];
		$p = $_POST["Phone"];
		$s = $_POST["status"];
		$projectTitle = $_POST["projectTitle"];


		       if (isset($db)) {
		       //inserting into Databas
		       	$conn = new PDO("mysql:host=$servername;dbname=$db", $user, $pass);

		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	try {
		       		$sql = "INSERT INTO `user` (`id`, `u_name`, `campus_affiliation`, `email`, `phone_primary`, `status`) VALUES ('$u','$un','$campusAffiliation','$email','$p','$s')";
		       		$conn->exec($sql);
		       	}catch(PDOException $e)
		       	{
		       		  echo $sql . "<br>" . $e->getMessage();
		       	}
		       		$questiona = file("questions.txt");
		       		try {
		       		for ($i=0; $i<count($questiona) ; $i++) { 
		       			$x = $i+1;
		       			$sql = "INSERT INTO `question` (`id`, `text`, `type`) VALUES ('$x', '$questiona[$i]', 'review')";
		       			$conn->exec($sql);
		       		}
		       		}catch(PDOException $e)
		       	{
		       		  echo $sql . "<br>" . $e->getMessage();
		       	}

		       	try {
		       		$sql = "INSERT INTO `advisor`(`a_name`,`email`, `dept`, `phone`) VALUES ('$staffAdvisor','$advisorEmail', '$advisorDept', '$advisorPhone')";
		       		$conn->exec($sql);
		       	} catch (PDOException $e) {
		       		
		       		  echo $sql . "<br>" . $e->getMessage();
		       	}
		       		try {
		       		$sql = "INSERT INTO `project`(`id`,`user_id`, `advisor_name`, `group_name`, `title`, `amount`, `contact_name`, `group`, `completed`) VALUES ('$u+$groupName','$u', '$staffAdvisor', '$groupName', '$projectTitle', '$amount','$staffAdvisor','$groupName', '0')";
		       		$conn->exec($sql);
		       	} catch (PDOException $e) {
		       		
		       		  echo $sql . "<br>" . $e->getMessage();
		       	}

		       	$answers = array();
		       	try {
		       		for ($i=1; $i<13 ; $i++) { 
		       			$answers = $_POST["question$i"];
		       			
		       			$sql = "INSERT INTO `answer` (`user_id`, `question_id`, `project_id`, `answer`, `comment`) VALUES ('$u', '$i', '$u+$groupName', '$answers', '$answers')";
		       			$conn->exec($sql);
		       		}
		       	} catch (PDOException $e) {
		       		echo $sql . "<br>" . $e->getMessage();
		       	}
		       	}
		
?>
<h2 id="confirmationh2">
You may now close the page, Thank you for your time!
</h2>
</body>
		</div>

		<!-- ʕ•́ᴥ•̀ʔ -->
		
	</body>
</html>