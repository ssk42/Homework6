	<!--header-->
	<?php 
		include "common.php";
		echo $head;
	?>
	<h1>
		Thank you!
	</h1>
	<div>
	<?php
		$UserName=$_POST["name"];
		// setcookie("name", $UserName);
		$UserGender=$_POST["gender"];
		// setcookie("gender", $UserGender);
		// if ($UserGender=="Male") {
		// 	setcookie("hot", 'Female');		
		// }
		// else if($_COOKIE["gender"]=="Female") {
		// 	setcookie("hot", 'Male');	
		// }
		// else{
		// 	setcookie("hot", 'Null');
		// }
		$UserAge=$_POST["age"];
		// setcookie("age", $UserAge);
		$UserPersonality=$_POST["personality"];
		// setcookie("personality", $UserPersonality);
		$UserOS=$_POST["OS"];
		// setcookie("OS", $UserOS);
		$UserSeekingAgeMin=$_POST["seekingagemin"];
		// setcookie("seekingagemin", $UserSeekingAgeMin);
		$UserSeekingAgeMax=$_POST["seekingagemax"];
		// setcookie("seekingagemax", $UserSeekingAgeMax);
		
		#Creates User information string
		$UserInformation="\n".$UserName.",".$UserGender.
		",".$UserAge.",".$UserPersonality.",".
		$UserOS.",".$UserSeekingAgeMin.",".$UserSeekingAgeMax."\n";
		// setcookie("userinformation", $UserInformation);
		#Opens singles.text file	
		$singlesfile=fopen("singles.txt", "a");	
		file_put_contents("singles.txt",$UserInformation,FILE_APPEND);
		fclose($singlesfile);
	?>
		Welcome to NerdLuv, <?=$UserName?> !<br>
		<br>
		Now 
		<a href="matches.php">log in to see your matches!</a><br>


	</div>
	<!--footer-->
	<?php 
			include "common.php";
			echo $footer;
	?>