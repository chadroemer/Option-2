<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css">
	<link rel="icon" href="photos/greenFee.png">
	<link rel="stylesheet" type="text/css" href="option2.css">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <title>Application Form</title>
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
		<form action="" id="greenForm">
			
		</form>
		 
	<div id="greenFeeFormContent">

	<div id="tabs">
		  <ul>
		    <li><a href="#tabs-1">User Info</a></li>
		    <li><a href="#tabs-2">Contact Info</a></li>
		    <li><a href="#tabs-3">Project Info</a></li>
		    <li><a href="#tabs-4">Questions</a></li>
		    <li><a href="#tabs-5">Finalize</a></li>
		  </ul>
		  <div id="tabs-1">
			
				<form id="FormTab1" action="confirmation.php" method="post">
				<p>Star ID:</p>
					<hr id="formHr">
					<input type="text" name="projectTitle" id="inputSize" required>

				<form id="FormTab1" method="post">
				<p>Username: </p>
					<hr id="formHr">
					<input type="text" name="projectTitle" id="inputSize" required>

				<p>Campus Affiliation</p>
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
			    <p><strong><u>Instructions:</u></strong> Please fill in answers to the the following 10 questions. You may copy and paste your text from another document, if you wish. </p>
			    	<hr id="formHr"> 
			    	<br>

			    <p class="tab4p"><strong>1. Project Description</strong></p>
			    <p>Provide a summary of your project:</p>
			    	<hr id="formHr">

			    	<textarea name="textarea1" style="width:100%;height:100px;"></textarea>

			    	<hr>

			    <p class="tab4p"><strong>2. Sustainability and the student experience at WSU</strong></p>
			    <p>How does your project promote and enhance aspects of sustainability (environmental, economic and/or equity) and positively impact the student experience at WSU? Please be as specific and detailed as possible.</p>
			    	<hr id="formHr">

			    	<textarea name="textarea2" style="width:100%;height:100px;"></textarea>	

			    	<hr>

			    	<p class="tab4p"><strong>3. Product Supplier(s) and material specifications</strong></p>
			    <p>Please be as specific as possible including where to purchase the materials (local vendors preferred), colors, model #, etc. Please include any quotes or proposals that you have received.</p>
			    	<hr id="formHr">

			    	<textarea name="textarea3" style="width:100%;height:100px;"></textarea>	

			    	<hr>

				<p class="tab4p"><strong>4. Student Input and Endorsement</strong></p>
			    <p>How has your project sought student input and endorsement? This could include focus groups, presentation to the SGA Student Sustainability Committee, student org endorsement, etc. Please include any letters of support, copies of meeting minutes showing endorsement, etc., if applicable.</p>
			    	<hr id="formHr">
			    	<!-- <input type="text" name="studentInput" class="tab4text"> -->
			    	<textarea name="textarea4" style="width:100%;height:100px;"></textarea>

			    	<hr>

			    <p class="tab4p"><strong>5. Faculty and Staff Input and Endorsement </strong></p>
			    <p>Please note which departments, committees and/or specific positions on campus you have discussed your proposal with.  In some cases, projects will require review and approval from one or more of these prior to review by the Sustainability Committee.  Based on the specifics of your proposal, please anticipate which areas of campus will be impacted and engage with them early on to secure their support and involvement. Projects impacting the campus landscape will require approval by the Arboretum and Land Stewardship Committee</p>
			    	<hr id="formHr">
			    	<!-- <input type="text" name="studentInput" class="tab4text"> -->
			    	<textarea name="textarea5" style="width:100%;height:100px;"></textarea>

			    	<hr>
				
				<p class="tab4p"><strong>6. Anticipated Outcomes/Impact</strong></p>
			    <p>What outcomes do you anticipate? Discuss environmental benefits, impact on the student experience, and the education and outreach potential. If the project has environmental benefits, please quantify those benefits in terms of kilowatt-hours saved, tons of greenhouse gas emissions reduced, gallons of stormwater treated, etc.</p>
			    	<hr id="formHr">
			    	<!-- <input type="text" name="projectOutcome" class="tab4text"> -->
			    	<textarea name="textarea6" style="width:100%;height:100px;"></textarea>

			    	<hr>

			    <p class="tab4p"><strong>7. Project Benchmarking</strong></p>
			    <p>Have similar projects been implemented on other campuses? Have they been successful? How does this project differ? Please cite any case studies, reports, or other examples that your proposal is based on. Also include any information on options or alternative products that you considered, but ultimately rejected and the reason(s) for making these choices.</p>
			    	<hr id="formHr">
			    	<!-- <input type="text" name="projectBenchmark" class="tab4text"> -->
			    	<textarea name="textarea7" style="width:100%;height:100px;"></textarea>

			    	<hr>

			    <p class="tab4p"><strong>8. Accountability</strong></p>
			    <p>How will you measure and evaluate your project’s progress and success?</p>
			    	<hr id="formHr">
			    	<!-- <input type="text" name="projectAccountability" class="tab4text"> -->
			    	<textarea name="textarea8" style="width:100%;height:100px;"></textarea>

			    	<hr>

			    <p class="tab4p"><strong>9. Cost Savings</strong></p>
			    <p>Will the project result in expected cost savings? If yes, what is the payback period?</p>
			    	<hr id="formHr">
			    	<!-- <input type="text" name="projectSavings" class="tab4text"> -->
			    	<textarea name="textarea9" style="width:100%;height:100px;"></textarea>

			    	<hr>

			    <p class="tab4p"><strong>10. Project Self Sufficiency</strong></p>
			    <p>What is the total project budget? What is your plan for sustained funding? Is this project receiving funding from other sources? If so, please explain.</p>
			    	<hr id="formHr">
			    	<!-- <input type="text" name="projectSufficiency" class="tab4text"> -->
			    	<textarea name="textarea10" style="width:100%;height:100px;"></textarea>

			    	<hr>

			    <p class="tab4p"><strong>11. Project Lifespan</strong></p>
			    <p>What is the expected lifespan of the project? Who will be responsible for overseeing it during that time?</p>
			    	<hr id="formHr">
			    	<!-- <input type="text" name="projectLifespan" class="tab4text"> -->
			    	<textarea name="textarea11" style="width:100%;height:100px;"></textarea>

			    	<hr>

			    <p class="tab4p"><strong>12. Project Sustainability/Accountability</strong></p>
			    <p>How will you ensure the sustained existence/maintenance of this project (including reporting requirements) once you are no longer involved? If the project will conclude while you are involved, what will happen to the materials purchased for the project and how will you return the project site to its original condition?</p>
			    	<hr id="formHr">
			    	<!-- <input type="text" name="projectSustainability" class="tab4text"> -->
			    	<textarea name="textarea12" style="width:100%;height:100px;"></textarea>

			    	<hr>

			    <p class="tab4p"><strong>13. Project Potenial</strong></p>
			    <p>How can your project be scaled for broader campus application beyond the initial phase?</p>
			    	<hr id="formHr">
			    	<!-- <input type="text" name="projectSummary" class="tab4text"> -->
			    	<textarea name="textarea13" style="width:100%;height:100px;"></textarea>

			    	<hr>
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
						<!-- <button id="submitButton" type="submit" value="Submit Form" formaction="#">Submit <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></button> -->
					<br>
		  </div>
	</div>
</form>
</div>

<!-- ʕ•́ᴥ•̀ʔ -->

</body>
</html>