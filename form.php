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
		    <li><a href="#tabs-2">Group Info</a></li>
		    <li><a href="#tabs-3">Project Info</a></li>
		    <li><a href="#tabs-4">Questions</a></li>
		    <li><a href="#tabs-5">Finalize</a></li>
		  </ul>
		  <div id="tabs-1">
			
				<form id="FormTab1" action="confirmation.php" method="post">
				<p>Star ID:</p>
					<hr id="formHr">
					<input type="text" name="projectTitle" id="inputSize" required>

		
				<p>Username:</p>
					<hr id="formHr">
					<input type="text" name="Amount" id="inputSize" required>

				<p>Campus Affiliation (Name of Organization, Department, or Office):</p>
					<hr id="formHr">
					<input type="text" name="Contact" id="inputSize" required> 

				<p>Email Address</p>
					<hr id="formHr">
					<input type="text" name="campusAffiliation" id="inputSize" required>

				<p>Phone Number:</p>
					<hr id="formHr">
					<input type="text" name="email" id="inputSize" required>


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

			    <p class="tab4p"><strong>1. Student Experience</strong></p>
			    <p>Project includes opportunities for student involvement and/or will positively impact the student experience.</p>
			    	<hr id="formHr">

			    	<textarea name="textarea1" style="width:100%;height:100px;"></textarea>

			    	<hr>

			    <p class="tab4p"><strong>2. Connection to Campus</strong></p>
			    <p>Project directly addresses environmental sustainability on the WSU campus or in the capacity that on-campus activities directly influence environmental sustainability in the surrounding community..</p>
			    	<hr id="formHr">

			    	<textarea name="textarea2" style="width:100%;height:100px;"></textarea>	

			    	<hr>

			    	<p class="tab4p"><strong>3. Feasibility and Institutional Support</strong></p>
			    <p>Project is feasible and has support from appropriate campus individuals and entities. Individual students or student organizations must have the signature of a faculty or staff advisor who is committed to advising throughout project implementation</p>
			    	<hr id="formHr">

			    	<textarea name="textarea3" style="width:100%;height:100px;"></textarea>	

			    	<hr>

				<p class="tab4p"><strong>4. Appropriateness of Schedule and Budget Request</strong></p>
			    <p>Project schedule and budget are reasonable and conform to established timelines, constraints and parameters.</p>
			    	<hr id="formHr">
			    	<!-- <input type="text" name="studentInput" class="tab4text"> -->
			    	<textarea name="textarea4" style="width:100%;height:100px;"></textarea>

			    	<hr>

			    <p class="tab4p"><strong>5.Accountability </strong></p>
			    <p>Project includes mechanism for evaluation and follow-up. At a minimum, a project plan includes appropriate progress reports to the Sustainability Committee based on the duration of the project and a final report within 60 days following completion of the project</p>
			    	<hr id="formHr">
			    	<!-- <input type="text" name="studentInput" class="tab4text"> -->
			    	<textarea name="textarea5" style="width:100%;height:100px;"></textarea>

			    	<hr>
				
				<p class="tab4p"><strong>6. Innovation</strong></p>
			    <p>Project is innovative in nature and does not include routine maintenance or code-compliant activities. Funding may support narrowing the gap between code-compliant and more sustainable alternatives</p>
			    	<hr id="formHr">
			    	<!-- <input type="text" name="projectOutcome" class="tab4text"> -->
			    	<textarea name="textarea6" style="width:100%;height:100px;"></textarea>

			    	<hr>

			    <p class="tab4p"><strong>7. Environmental Benefits</strong></p>
			    <p>Project demonstrates a reduction in WSU\'s carbon footprint or provides other environmental benefits such as water conservation, storm water management, biodiversity conservation, and waste minimization.</p>
			    	<hr id="formHr">
			    	<!-- <input type="text" name="projectBenchmark" class="tab4text"> -->
			    	<textarea name="textarea7" style="width:100%;height:100px;"></textarea>

			    	<hr>

			    <p class="tab4p"><strong>8. Regional Connection</strong></p>
			    <p>Project provides intellectual and emotional linkage with the unique landscape of the Driftless Area/ Mississippi River, as well as the cultural lifeways of this special place.</p>
			    	<hr id="formHr">
			    	<!-- <input type="text" name="projectAccountability" class="tab4text"> -->
			    	<textarea name="textarea8" style="width:100%;height:100px;"></textarea>

			    	<hr>

			    <p class="tab4p"><strong>9.Outreach and Education</strong></p>
			    <p> Project considers interdisciplinary and experiential education and outreach opportunities and has included them as part of its implementation plan.</p>
			    	<hr id="formHr">
			    	<!-- <input type="text" name="projectSavings" class="tab4text"> -->
			    	<textarea name="textarea9" style="width:100%;height:100px;"></textarea>

			    	<hr>

			    <p class="tab4p"><strong>10.Self Sufficiency</strong></p>
			    <p>Project includes matching funds from sources beyond SGF or includes a plan for sustained funding.</p>
			    	<hr id="formHr">
			    	<!-- <input type="text" name="projectSufficiency" class="tab4text"> -->
			    	<textarea name="textarea10" style="width:100%;height:100px;"></textarea>

			    	<hr>

			    <p class="tab4p"><strong>11. Potential for Broad Application</strong></p>
			    <p>Project has potential to be scalable across the campus.</p>
			    	<hr id="formHr">
			    	<!-- <input type="text" name="projectLifespan" class="tab4text"> -->
			    	<textarea name="textarea11" style="width:100%;height:100px;"></textarea>

			    	<hr>

			    <p class="tab4p"><strong>12. Cost/Benefit Analysis (as appropriate)</strong></p>
			    <p>Project proposal outlines project payback, lifecycle costs and savings, etc.</p>
			    	<hr id="formHr">
			    	<!-- <input type="text" name="projectSustainability" class="tab4text"> -->
			    	<textarea name="textarea12" style="width:100%;height:100px;"></textarea>

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