<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css">
	<link rel="icon" href="photos/greenFee.png">
	<link rel="stylesheet" type="text/css" href="option2.css">
	<title>Application Form</title>

	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
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

<<<<<<< HEAD
	<div id="greenFeeIntro">
		<form action="" id="greenForm">
			
			
		</form>
		 
=======
	<div id="greenFeeFormContent">

	<div id="tabs">
		  <ul>
		    <li><a href="#tabs-1">Form Tab 1</a></li>
		    <li><a href="#tabs-2">Form Tab 2</a></li>
		    <li><a href="#tabs-3">Form Tab 3</a></li>
		    <li><a href="#tabs-4">Form Tab 4</a></li>
		    <li><a href="#tabs-5">Form Tab 5</a></li>
		  </ul>
		  <div id="tabs-1">
			
			<form id="FormTab1" action="confirmation.php" method="post">
			<p>Project Title</p>
				<hr id="formHr">
				<input type="text" name="projectTitle" id="inputSize" required>

			<form id="FormTab1" method="post">
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

			<p class="tab4p"><strong>2. Student Input and Endorsement</strong></p>
		    <p>How has your project sought student input and endorsement? This could include focus groups, presentation to the SGA Student Sustainability Committee, student org endorsement, etc.</p>
		    	<hr id="formHr">
		    	<input type="text" name="studentInput" class="tab4text">
			
			<p class="tab4p"><strong>3. Anticipated Outcomes/Impact</strong></p>
		    <p>What outcomes do you anticipate? Discuss environmental benefits, impact on the student experience, and the education and outreach potential. If the project has environmental benefits, please quantify those benefits in terms of kilowatt-hours saved, tons of greenhouse gas emissions reduced, gallons of stormwater treated, etc.</p>
		    	<hr id="formHr">
		    	<input type="text" name="projectOutcome" class="tab4text">

		    <p class="tab4p"><strong>4. Project Benchmarking</strong></p>
		    <p>Have similar projects been implemented on other campuses? Have they been successful? How does this project differ?</p>
		    	<hr id="formHr">
		    	<input type="text" name="projectBenchmark" class="tab4text">

		    <p class="tab4p"><strong>5. Accountability</strong></p>
		    <p>How will you measure and evaluate your project’s progress and success?</p>
		    	<hr id="formHr">
		    	<input type="text" name="projectAccountability" class="tab4text">

		    <p class="tab4p"><strong>6. Cost Savings</strong></p>
		    <p>Will the project result in expected cost savings? If yes, what is the payback period?</p>
		    	<hr id="formHr">
		    	<input type="text" name="projectSavings" class="tab4text">

		    <p class="tab4p"><strong>7. Project Self Sufficiency</strong></p>
		    <p>What is the total project budget? What is your plan for sustained funding? Is this project receiving funding from other sources? If so, please explain.</p>
		    	<hr id="formHr">
		    	<input type="text" name="projectSufficiency" class="tab4text">

		    <p class="tab4p"><strong>8. Project Lifespan</strong></p>
		    <p>What is the expected lifespan of the project? Who will be responsible for overseeing it during that time?</p>
		    	<hr id="formHr">
		    	<input type="text" name="projectLifespan" class="tab4text">

		    <p class="tab4p"><strong>9. Project Sustainability/Accountability</strong></p>
		    <p>How will you ensure the sustained existence/maintenance of this project (including reporting requirements) once you are no longer involved? If the project will conclude while you are involved, what will happen to the materials purchased for the project and how will you return the project site to its original condition?</p>
		    	<hr id="formHr">
		    	<input type="text" name="projectSustainability" class="tab4text">

		    <p class="tab4p"><strong>10. Project Potenial</strong></p>
		    <p>How can your project be scaled for broader campus application beyond the initial phase?</p>
		    	<hr id="formHr">
		    	<input type="text" name="projectSummary" class="tab4text">
		    	<br><br>
		  </div>

		  <div id="tabs-5">
		  		<p><u>Download the external budget form.</u></p>
		 		
		 		<p>
		 			Please list all of your expenses for the project. Key budget components include total project cost, materials costs, labor costs, annual maintenance costs and annual operations costs. You MUST provide documentation to substantiate the cost of budget items (i.e. vendor proposal, product catalog page, supplier web site, etc.). 
		 		</p>

		 		<p>
					Email the filled-in budget form, and any additional supporting documents, to: 
					<a href="mailto:nengstrom@winona.edu?subject=SGF%20application">NEngstrom@winona.edu</a>
				</p>
		   
		    	<hr id="formHr">
		    	<br>
					<input id="submitButton" type="submit" value="Submit Form">
				<br>
		  </div>
>>>>>>> 9026570e2a0b2228196ac680f2be693e99fae639
	</div>
</form>
</div>

</body>
</html>