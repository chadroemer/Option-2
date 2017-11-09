<?php
$root="root"; 
$root_password = "";
$host="localhost"; 
$user='tr4';
$pass='fer'; 
$db="GreenDBw";

try {
     $dbh = new PDO("mysql:host=$host", $root, $root_password);

        $dbh->exec("CREATE DATABASE `$db`;
                CREATE USER '$user'@'localhost' IDENTIFIED BY '$pass';
                GRANT ALL ON `$db`.* TO '$user'@'localhost';
                ") 
                or die(print_r($dbh->errorInfo(), true));
    } catch (PDOException $e) {
        die("DB ERROR: ". $e->getMessage());
    }


?>


<?php
$servername = "localhost";
$username = "tr4";
$password = "fer";



// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// Create database
$sql = "CREATE DATABASE $db";
if ($conn->query($sql) === TRUE) {
 
} else {
   
}


$conn->close();
?>
<?php

    try {
    $conn = new PDO("mysql:host=$servername;dbname=$db", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
$sql = "CREATE TABLE GreenTry (
    projectTitle VARCHAR(30) NOT NULL,
    Amount INT(6), Contact VARCHAR(30),
    campusAffiliation VARCHAR(30), email VARCHAR(50),
    phoneContact VARCHAR(30), status VARCHAR(30),
    ideaOrigin VARCHAR(30), groupName VARCHAR(30),
    staffAdvisor VARCHAR(30), advisorEmail VARCHAR(50),
    advisorDept VARCHAR(30), advisorPhone VARCHAR(30),
    projectSummary VARCHAR(50) 
)";
$conn->exec($sql);
}
catch(PDOException $e)
    {
    }
?>
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
			
				//global $_name;
				//$_name = $_POST['name'];
			} ?>
<<<<<<< HEAD
</h1>
</div>
<?php
$projectTitle = $_POST["projectTitle"];
$amount = $_POST["Amount"];
$contact = $_POST["Contact"];
$campusAffiliation = $_POST["campusAffiliation"];
$email = $_POST["email"];
$phoneContact = $_POST["phoneContact"];
$status = $_POST["status"];
$ideaOrigin = $_POST["ideaOrigin"];
$groupName = $_POST["groupName"];
$staffAdvisor = $_POST["staffAdvisor"];
$advisorEmail = $_POST["advisorEmail"];
$advisorDept = $_POST["advisorDept"];
$advisorPhone = $_POST["advisorPhone"];
$projectSummary = $_POST["projectSummary"];
       if (isset($db)) {
       //inserting into Database
    try {
    $conn = new PDO("mysql:host=$servername;dbname=$db", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "INSERT INTO GreenTry (projectTitle, Amount, Contact, campusAffiliation, email, 
    phoneContact, status, ideaOrigin, groupName, staffAdvisor, advisorEmail, advisorDept, 
    advisorPhone, projectSummary)
    VALUES ('$projectTitle','$amount', '$contact','$campusAffiliation'
    ,'$email','$phoneContact','$status','$ideaOrigin','$groupName',
    '$staffAdvisor','$advisorEmail','$advisorDept','$advisorPhone',
    '$projectSummary')";
    $conn->exec($sql);

    }
catch(PDOException $e)
    {

    }
    } else {
        
    }

$conn = null;
?>
<h2 id="confirmationh2">
You may now close the page, Thank you for your time!
</h2>
</body>
=======
		</div>
		<h2 id="confirmationh2">You may now close the page, Thank you for your time!</h2>
	</body>
>>>>>>> 6109be66159d95fda40916364c481bf7976eba6d
</html>