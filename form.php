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
    <script src="option2.js" type="text/javascript"></script>
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
	<div id="greenFeeFormContent">
	<div id="tabs">
		  <ul>
		    <li><a href="#tabs-1" id="button1">User Info</a></li>
		    <li><a href="#tabs-2" id="button2">Group Info</a></li>
		    <li><a href="#tabs-3" id="button3">Project</a></li>
		    <li><a href="#tabs-4" id="button4">Questions</a></li>
		    <li><a href="#tabs-5" id="button5">Budget</a></li>
		  </ul>
		  <div id="tabs-1">
			
				<form id="FormTab1" action="confirmation.php" method="post">
			<div id="indiv">
				<p id="formP">Star ID:</p>
					<input type="text" name="user_id" id="inputSize" required>
					<hr id="formHr">
			</div>
			<br>
		
			<div id="indiv">
				<p id="formP">Username:</p>
					<input type="text" name="u_name" id="inputSize" required>
					<hr id="formHr">
			</div>
			<br>

			<div id="indiv">
				<p id="formP">Campus Affiliation (Name of Organization, Department, or Office):</p>
					<input type="text" name="campusAffiliation" id="inputSize" required> 
					<hr id="formHr">
			</div>
			<br>

			<div id="indiv">
				<p id="formP">Email Address</p>
					<input type="text" name="email" id="inputSize" required>
					<hr id="formHr">
			</div>
			<br>

			<div id="indiv">
				<p id="formP">Phone Number:</p>
					<input type="text" name="Phone" id="inputSize" required>
					<hr id="formHr">
			</div>
			<br>

			<div id="indiv">
				<p id="formP">Status:</p>
				<br>
					<input type="radio" name="status" value="student" onclick="showDummy();">Student<br>
	  				<input type="radio" name="status" value="staff" onclick="removeDummy();">Staff<br>
	  				<input type="radio" name="status" value="other" onclick="showDummy();">Other
	  				<hr id="formHr">
	  		</div>
	  		<br>
			<br><br>
			
		  </div>
		  <div id="tabs-2">
			    <p><strong>As a Student, Choose One of These Options:</strong></p>
					<input type="radio" name="ideaOrigin" value="one">This Project is Soley My Own.<br><br>
	  				<input type="radio" name="ideaOrigin" value="group">This Project is Proposed on Behalf of a Group.<br>
	  				<hr id="formHr">
		  </div>

		  <div id="tabs-3">

		  	<div id="indiv">
		  		<p id="formP">Project Title:</p>
		  			<input type="text" name="projectTitle" id="inputSize" >
		  			<hr id="formHr">
		  	</div>
		  	<br>

		  	<div id="indiv">
			    <p id="formP">Name of Group(student org., campus dept., etc.):</p>
					<input type="text" name="groupName" id="inputSize" >
					<hr id="formHr">
			</div>
			<br>

			<div id="indiv">
				<p id="formP">Name of Faculty or Staff Project Advisor: </p>
					<input type="text" name="staffAdvisor" id="inputSize" >
					<hr id="formHr">
			</div>
			<br>

			<div id="indiv">
				<p id="formP">Advisor's Email Address:</p>
					<input type="text" name="advisorEmail" id="inputSize" > 
					<hr id="formHr">
			</div>
			<br>

			<div id="indiv">
				<p id="formP">Advisor's Department or Organization:</p>
					<input type="text" name="advisorDept" id="inputSize">
					<hr id="formHr">
			</div>
			<br>

			<div id="indiv">
				<p id="formP">Advisor's Phone Number(s): </p>
					<input type="text" name="advisorPhone" id="inputSize" >
					<hr id="formHr">
			</div>
			<br>
		  </div>

		  <div id="tabs-4">

			    <p><strong><u>Instructions:</u></strong> Please fill in answers to the the following 10 questions. You may copy and paste your text from another document, if you wish. </p>
			    	<hr id="formHr"> 
			    	<br>

			<div id="indiv">
			    <p class="tab4p"><strong>1. Student Experience</strong></p>
			    <p>Project includes opportunities for student involvement and/or will positively impact the student experience.</p>
			    	<textarea name="question1" style="width:100%;height:100px;"></textarea>
			    	<hr id="formHr">
			</div>
			<br>

			<div id="indiv">
			    <p class="tab4p"><strong>2. Connection to Campus</strong></p>
			    <p>Project directly addresses environmental sustainability on the WSU campus or in the capacity that on-campus activities directly influence environmental sustainability in the surrounding community..</p>
			    	<textarea name="question2" style="width:100%;height:100px;"></textarea>	
			    	<hr id="formHr">
			</div>
			<br>

			<div id="indiv">
			    	<p class="tab4p"><strong>3. Feasibility and Institutional Support</strong></p>
			    <p>Project is feasible and has support from appropriate campus individuals and entities. Individual students or student organizations must have the signature of a faculty or staff advisor who is committed to advising throughout project implementation</p>
			    	<textarea name="question3" style="width:100%;height:100px;"></textarea>	
			    	<hr id="formHr">
			</div>
			<br>

			<div id="indiv">
				<p class="tab4p"><strong>4. Appropriateness of Schedule and Budget Request</strong></p>
			    <p>Project schedule and budget are reasonable and conform to established timelines, constraints and parameters.</p>
			    	<!-- <input type="text" name="studentInput" class="tab4text"> -->
			    	<textarea name="question4" style="width:100%;height:100px;"></textarea>
			    	<hr id="formHr">
			</div>
			<br>

			<div id="indiv">
			    <p class="tab4p"><strong>5.Accountability </strong></p>
			    <p>Project includes mechanism for evaluation and follow-up. At a minimum, a project plan includes appropriate progress reports to the Sustainability Committee based on the duration of the project and a final report within 60 days following completion of the project</p>
			    	<!-- <input type="text" name="studentInput" class="tab4text"> -->
			    	<textarea name="question5" style="width:100%;height:100px;"></textarea>
			    	<hr id="formHr">
			</div>
			<br>

			<div id="indiv">
				<p class="tab4p"><strong>6. Innovation</strong></p>
			    <p>Project is innovative in nature and does not include routine maintenance or code-compliant activities. Funding may support narrowing the gap between code-compliant and more sustainable alternatives</p>
			    	<!-- <input type="text" name="projectOutcome" class="tab4text"> -->
			    	<textarea name="question6" style="width:100%;height:100px;"></textarea>
			    	<hr id="formHr">
			</div>
			<br>

			<div id="indiv">
			    <p class="tab4p"><strong>7. Environmental Benefits</strong></p>
			    <p>Project demonstrates a reduction in WSU\'s carbon footprint or provides other environmental benefits such as water conservation, storm water management, biodiversity conservation, and waste minimization.</p>
			    	<!-- <input type="text" name="projectBenchmark" class="tab4text"> -->
			    	<textarea name="question7" style="width:100%;height:100px;"></textarea>
			    	<hr id="formHr">
			</div>
			<br>

			<div id="indiv">
			    <p class="tab4p"><strong>8. Regional Connection</strong></p>
			    <p>Project provides intellectual and emotional linkage with the unique landscape of the Driftless Area/ Mississippi River, as well as the cultural lifeways of this special place.</p>
			    	<!-- <input type="text" name="projectAccountability" class="tab4text"> -->
			    	<textarea name="question8" style="width:100%;height:100px;"></textarea>
			    	<hr id="formHr">
			</div>
			<br>

			<div id="indiv">
			    <p class="tab4p"><strong>9.Outreach and Education</strong></p>
			    <p> Project considers interdisciplinary and experiential education and outreach opportunities and has included them as part of its implementation plan.</p>
			    	<!-- <input type="text" name="projectSavings" class="tab4text"> -->
			    	<textarea name="question9" style="width:100%;height:100px;"></textarea>
			    	<hr id="formHr">
			</div>
			<br>

			<div id="indiv">
			    <p class="tab4p"><strong>10.Self Sufficiency</strong></p>
			    <p>Project includes matching funds from sources beyond SGF or includes a plan for sustained funding.</p>
			    	<!-- <input type="text" name="projectSufficiency" class="tab4text"> -->
			    	<textarea name="question10" style="width:100%;height:100px;" type="project"></textarea>
			    	<hr id="formHr">
			</div>
			<br>

			<div id="indiv">
			    <p class="tab4p"><strong>11. Potential for Broad Application</strong></p>
			    <p>Project has potential to be scalable across the campus.</p>
			    	<!-- <input type="text" name="projectLifespan" class="tab4text"> -->
			    	<textarea name="question11" style="width:100%;height:100px;"></textarea>
			    	<hr id="formHr">
			</div>
			<br>

			<div id="indiv">
			    <p class="tab4p"><strong>12. Cost/Benefit Analysis (as appropriate)</strong></p>
			    <p>Project proposal outlines project payback, lifecycle costs and savings, etc.</p>
			    	<!-- <input type="text" name="projectSustainability" class="tab4text"> -->
			    	<textarea name="question12" style="width:100%;height:100px;"></textarea>
			    	<hr id="formHr">
			</div>
			<br>
			<br><br>
		  </div>

		  <div id="tabs-5">
			 		<p>
			 			Please list all of your expenses for the project. Key budget components include total project cost, materials costs, labor costs, annual maintenance costs and annual operations costs. You MUST provide documentation to substantiate the cost of budget items (i.e. vendor proposal, product catalog page, supplier web site, etc.). 
			 		</p>
			 	<div id="indiv">
					<p id="formP">Resource Materials:</p>
					<span id="dollar">$</span><input onblur="findTotal()" type="text" name="Amount" id="inputSize" required>
					<hr id="formHr">
				</div>
				<br>

				<div id="indiv">	
					<p id="formP">Educational Supplies:</p>
					<span id="dollar">$</span><input onblur="findTotal()" type="text" name="Amount" id="inputSize" required>
					<hr id="formHr">
				</div>
				<br>
				
				<div id="indiv">
					<p id="formP">Student Support:</p>
					<span id="dollar">$</span><input onblur="findTotal()" type="text" name="Amount" id="inputSize" required>
					<hr id="formHr">
				</div>
				<br>

				<div id="indiv">
					<p id="formP">Staff Support:</p>
					<span id="dollar">$</span><input onblur="findTotal()" type="text" name="Amount" id="inputSize" required>
					<hr id="formHr">
				</div>
				<br>

				<div id="indiv">	
					<p id="formP">Community Member Support:</p>
					<span id="dollar">$</span><input onblur="findTotal()" type="text" name="Amount" id="inputSize" required>
					<hr id="formHr">
				</div>
				<br>

				<div id="indiv">
					<p id="formP">Promotional Materials:</p>
					<span id="dollar">$</span><input onblur="findTotal()" type="text" name="Amount" id="inputSize" required>
					<hr id="formHr">
				</div>
				<br>

				<div id="indiv">
					<p id="formP">Other:</p>
					<span id="dollar">$</span><input onblur="findTotal()" type="text" name="Amount" id="inputSize" required>
					<hr id="formHr">
				</div>
				<br>

				<span id="dollar">$</span> TOTAL REQUESTED: <input type="text" name="total" id="total" required readonly>
				<br>
				<br>
				<hr id="formHr">
					<script type="text/javascript">
						function findTotal(){
   						var arr = document.getElementsByName('Amount');
  						 var tot=0;
	  					  for(var i=0;i<arr.length;i++){
	 					       if(parseInt(arr[i].value))
      				      tot += parseInt(arr[i].value);
    					}
   				 		document.getElementById('total').value = tot;
					}
    				</script>
			    	<br>
						<input id="submitButton" type="submit" value="Submit Form">
						<!-- <button id="submitButton" type="submit" value="Submit Form" formaction="#">Submit <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></button> -->
					<br>
					<br>
		  </div>
	</div>
</form>
</div>
<!-- ʕ•́ᴥ•̀ʔ -->
</body>
</html>