<?php
$message = "";
$numberOfTimes = 0;
$hate_message="True";
$hate_words = array("OLOFO","OLORIBURUKU","IDIOT","BASTARD","STUPID","CRAZY",
"LOSER","DUMBASS","FOOLISH","BITCH","DICK","RITTARD","WEREY","MUMU","DULLARD","FAGGOT",
"DULL","KILL","HATE","MAD","FOOL","FUCK", "ASSHOLE",);
$dignitaries = array("BUHARI","OSINBAJO");
if(isset($_POST["submit"])){
	
	
	if(empty($_POST["sentence"])){
		$message = "Empty Field(s) detected!";
	}
	
	
	else{
		$sentence = strtoupper($_POST["sentence"]);
		
			$inputs = explode(" ",$sentence);

			for ($i = 0; $i < count($dignitaries); $i++){
				foreach($inputs as $input){
					if($dignitaries[$i] == $input){
						$numberOfTimes++;
					}
					for ($j = 0; $j < count($hate_words); $j++){
						if($input == $hate_words[$j]){
							$hate_message = "True";
						}
						
					}
				}
			}
			if ($numberOfTimes >=1 && $hate_message == "True"){
				$message = "Hate Speech Detected";
			}
			else{
				$message = "No Hate Speech Detected";
			}
			

			
		
	}
}


?>


<!DOCTYPE html>
<html>
<head>
<style>
	#red-text{
		color: white;
		text-align: center;
	}
</style>
	<title>Detect Page</title>
	
	<link rel="stylesheet" href="css/textarea.css">
	<meta http-equiv="refresh" content = "10">
</head>
<body>
<?php 
include('templates/header.php');
?>

	<div id="wrapper">

	<form id="paper" method="post" action="detect.php">

		<!--<div id="margin">Matric No.: <input id="title" type="text" name="mat_no"></div>-->
		<textarea placeholder="Enter a sentence" id="text" name="sentence" rows="4" style="overflow: hidden; word-wrap: break-word; resize: none; height: 300px; " autofocus></textarea>  
			

		<p id = "red-text"><?php echo $message?></p>
		<br>
		
		<input id="button" name = "submit" type="submit" value="Submit">
		
	</form>

</div>
<!--<script type="text/javascript" src="js/textarea.js"></script>-->
</body>
</html>