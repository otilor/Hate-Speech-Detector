<!DOCTYPE html>	
<html>

<body>

<!--New Navbar-->

<?php include("templates/header.php")?>

<!--forms--> 
<div class="container">
	
<!--Results
<div class="row s5 m5 ">
	<div class="col s5 m4">
		<div class="card center blue">
			<div class="card-title white-text">Results</div>
				<div class="card-content white-text">
					<p>Buhari Name was detected: </p>
					<p>Hate Speech was used: </p	
				</div>
			</div>
		</div>
	</div>
</div>
-->

<div class="jumbotron">
  <h1 class="display-4" id = "intro">HSD</h1>
  <p class = "lead">Hate Speech Detector is a Web Application that analyzes text and finds out if words containing the name of the president, his vice are embedded in the string. It flags if detected.</p>
  <p class="lead">This is a simple Web Application, that analyzes input for Hate Speeches.</p>
  <hr class="my-4">
  <p>It uses PHP as Server-side language coupled with CSS3 and Bootstrap for styling.</p>
  <a class="btn btn-primary btn-lg" href="detect.php" role="button">Get Started</a>
</div>



<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/jquery-3.4.1.slim.min.js"></script>
<script type="text/javascript" src="js/popper.min.js"></script>
</body>
</html>