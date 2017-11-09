<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css">
	<link rel="icon" href="photos/greenFee.png">
	<link rel="stylesheet" type="text/css" href="option2.css">
	<title>Application Form</title>

	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<!--   <link rel="stylesheet" href="/resources/demos/style.css"> -->  
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#tabs" ).tabs({
      collapsible: true
    });
  } );
  </script>

</head>
<body>
 	
 	<div id="header">
		<img id="mainInfoPic" src="photos/WinonaWhite.png">		
	</div>

	<div id="greenFeeIntro">

		<div id="tabs">
		  <ul>
		    <li><a href="#tabs-1">Form Tab 1</a></li>
		    <li><a href="#tabs-2">Form Tab 2</a></li>
		    <li><a href="#tabs-3">Form Tab 3</a></li>
		    <li><a href="#tabs-4">Form Tab 4</a></li>
		  </ul>
		  <div id="tabs-1">
			
			<form id="FormTab1" action="confirmation.php" method="post">
				<p>Project Title</p>
				<hr id="formHr">
				<input type="text" name="projectTitle" id="inputSize" required>
<<<<<<< HEAD

=======
			
=======

			<form id="FormTab1" method="post">
>>>>>>> origin/master
				<p>Project Title</p>
				<hr id="formHr">
				<input type="text" name="projectTitle" id="inputSize" required>

				<p>Total Amount Requested</p>
				<hr id="formHr">
				<input type="text" name="Amount" id="inputSize" required>

				<p>Name and Title of Primary Contact</p>
				<hr id="formHr">
				<input type="text" name="Contact" id="inputSize" required> 

				<p>Campus Affiliation (Name of Organization, Department, or Office):</p>
				<hr id="formHr">
				<input type="text" name="campusAffiliation" id="inputSize" required>

				<p>Email Address:</p>
				<hr id="formHr">
				<input type="text" name="email" id="inputSize" required>

				<p>Cell and/or Work Phone Number(s):</p>
				<hr id="formHr" >
				<input type="text" name="phoneContact" id="inputSize" required>

				<p>Status:</p>
				<hr id="formHr">
				  	<input type="radio" name="status" value="student">Student<br>
  					<input type="radio" name="status" value="staff">Staff<br>
  					<input type="radio" name="status" value="other">Other

				<br><br>
			

		  </div>
		  <div id="tabs-2">
		    <p><strong>As a Student, Choose One of These Options:</strong></p>
		   
		    	<hr id="formHr">
				  	<input type="radio" name="ideaOrigin" value="one">This Project is Soley My Own.<br><br>
  					<input type="radio" name="ideaOrigin" value="group">This Project is Proposed on Behalf of a Group.<br>
		
		  </div>

		  <div id="tabs-3">
		    <p>Name of Group(student org., campus dept., etc.):</p>
				<hr id="formHr">
				<input type="text" name="groupName" id="inputSize" required>

				<p>Name of Faculty or Staff Project Advisor: </p>
				<hr id="formHr">
				<input type="text" name="staffAdvisor" id="inputSize" required>

				<p>Advisor's Email Address:</p>
				<hr id="formHr">
				<input type="text" name="advisorEmail" id="inputSize" required> 

				<p>Advisor's Department or Organization:</p>
				<hr id="formHr">
				<input type="text" name="advisorDept" id="inputSize" required>

				<p>Advisor's Phone Number(s): </p>
				<hr id="formHr">
				<input type="text" name="advisorPhone" id="inputSize" required>
		  </div>

		  <div id="tabs-4">
		    	<p><strong>Instructions:</strong> Please fill in answers to the the following 10 questions. You may copy and paste your text from another document, if you wish. </p>
		    	<hr id="formHr"> 
		    	<br>

		    	<p class="tab4p"><strong>1. Project Description</strong></p>
		    	<p>Provide a summary of your project:</p>
		    	<hr id="formHr">
		    	<input type="text" name="projectSummary" class="tab4text">
				<input id="submitbutton" style="display: inline;" type="submit" value="Submit Form">
		  </div>

		</div>
</form>
</div>

</body>
</html>