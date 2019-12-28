<!DOCTYPE html>
<html>
<head>
	<title>Form Biodata</title>
</head>
<body>
	<center>
		<h1>BIODATA</h1>
	</center>
	<form method="post" action="proses_biodata.php"?>
		Name 	:<input type="textbox" id="name" name="name">
		<br><br>
		Age 	:<input type="number" id="age" name="age">
		<br><br>
		Address :<br><textarea rows="5" cols="60" id="address" name="address"></textarea>
		<br><br>
		Hobbies :<input type="textbox" id="hobbies" name="hobbies">
		<br><br>
		Status 	:<input type="radio" id="status" name="status" value="Married">Married
			     <input type="radio" id="status" name="status" value="Single">Single
		<br><br>
		School 	:<input type="textbox" id="school" name="school">
		Year in :<input type="number" id="yearin" name="yearin">
		Year out:<input type="number" id="yearout" name="yearout">
		Major 	:<input type="textbox" id="major" name="major">
		<br><br>
		Skill 	:<input type="textbox" id="skill" name="skill"> 
		<br><br>
		Level :<input type="radio" id="level" name="level" value="Beginner">Beginner
			   <input type="radio" id="level" name="level" value="Advanced">Advanced
			   <input type="radio" id="level" name="level" value="Expert">Expert<br><br>
		Interest:<input type="radio" id="interest" name="interest" value="Yes">Yes
			     <input type="radio" id="interest" name="interest" value="No">No
		<br><br>

		<input type="submit" name="submit" value="simpan"><input type="reset" name="reset" value="cancel">
	</form>




	//*$name = "Nadia";
	$address = "Turen Permai F 22 Malang";
	echo "Name :".$name."<br>";
	echo "Address :".$address."<br>";

	$age = 22;
	echo "Age :".$age."<br>";

	$ismarried = TRUE;
	$name = "Nadia";
	if ($ismarried) 
		echo $name." Is Single <br>";
	else
		echo $name." Is Married <br>";

	$hobbies = array('Hobbies','Travelling','Reading','Swimming');
	echo $hobbies[0]." :".$hobbies[1].", ".$hobbies[2].", ".$hobbies[3]."<br>";


	$list_school = array('STEI Tazkia','2015','2019','Accounting');
	echo "School :".$list_school[0]."/".$list_school[1]."/".$list_school[2]."/".$list_school[3]."<br>";

	$skills= array('PHP','Beginner','Advanced','Expert');
	echo "Skills :".$skills[0]." level ".$skills[1]."<br>";

	$interest = TRUE;
	$name = "Nadia";
	if ($interest) 
		echo $name." is interest in coding <br>";
	else
		echo $name." not interest in coding <br>";*//

	 ?>
</body>
</html>