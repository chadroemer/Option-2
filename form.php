<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css">
	<link rel="icon" href="photos/green.png">
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
		  </ul>
		  <div id="tabs-1">
			
			<form id="FormTab1">
				<p>Project Title</p>
				<hr>
				<input type="text" name="projectTitle" id="inputSize" required>

				<p>Total Amount Requested</p>
				<hr>
				<input type="text" name="Amount" id="inputSize" required>

				<p>Name and Title of Primary Contact</p>
				<hr>
				<input type="text" name="Contact" id="inputSize" required> 

				<p>Campus Affiliation (Name of Organization, Department, or Office):</p>
				<hr>
				<input type="text" name="campusAffiliation" id="inputSize" required>

				<p>Email Address:</p>
				<hr>
				<input type="text" name="email" id="inputSize" required>

				<p>Cell and/or Work Phone Number(s):</p>
				<hr>
				<input type="text" name="phoneContact" id="inputSize" required>

				<p>Status:</p>
				<hr>
				  	<input type="radio" name="status" value="student">Student<br>
  					<input type="radio" name="status" value="staff">Staff<br>
  					<input type="radio" name="status" value="other">Other

				<br><br><br>
			</form>


		  </div>
		  <div id="tabs-2">
		    <p><strong>As a Student, Choose One of These Options:</strong></p>
		    <form id="FormTab1">
		    	<hr>
				  	<input type="radio" name="ideaOrigin" value="one">This Project is Soley My Own.<br><br>
  					<input type="radio" name="ideaOrigin" value="group">This Project is Proposed on Behalf of a Group.<br>
			</form>
		  </div>

		  <div id="tabs-3">
		    <p><strong>Click this tab again to close the content pane.</strong></p>
		    <p>Duis cursus. Maecenas ligula eros, blandit nec, pharetra at, semper at, magna. Nullam ac lacus. Nulla facilisi. Praesent viverra justo vitae neque. Praesent blandit adipiscing velit. Suspendisse potenti. Donec mattis, pede vel pharetra blandit, magna ligula faucibus eros, id euismod lacus dolor eget odio. Nam scelerisque. Donec non libero sed nulla mattis commodo. Ut sagittis. Donec nisi lectus, feugiat porttitor, tempor ac, tempor vitae, pede. Aenean vehicula velit eu tellus interdum rutrum. Maecenas commodo. Pellentesque nec elit. Fusce in lacus. Vivamus a libero vitae lectus hendrerit hendrerit.</p>
		  </div>
		</div>


</div>

</body>
</html>