	<!--header+heading-->
	<?php 
		include "common.php";
		echo $head;
		echo $bannerarea;
	?>

	<form action="signup-submit.php" method="post">
		<p>
			<label class="inline right" for "name">Name:</label>
			<input id="name" type="text" name="name" maxlength="16" onkeyup="verify()"><br>
		
			<label class="inline right" for "gender">Gender:</label>
			<input id="gender" type="radio" name="gender" value="Male"> Male
	  		<input id="gender" type="radio" name="gender" value="Female"> Female<br>
  		
  			<label class="inline right" for "age">Age:</label>
			<input id="age" type="text" name="age" size="6" maxlength="2"><br>
		
			<label class="inline right" for id="personality">Personality type:</label>
  			<input id="personality" type="text" name="personality" size="6" maxlength="4"><a href="http://www.humanmetrics.com/cgi-win/jtypes2.asp">(Don't know your type?)</a><br>
  		
  			<label class="inline right" for "OS">Favorite OS:</label>
  			<select id="OS" name="OS"><option>Windows</option>
  							<option>Max OS X</option>
  							<option>Linux</option>
  			</select><br>
  		
  			<label class="inline right" for "Seekingage:">Seeking age:</label>
  			<input id="Seekingagemin" type="text" name="seekingagemin" size="2" maxlength="2" value="min">
  			to 
  			<input id="Seekingagemax" type="text" name="seekingagemax" size="2" maxlength="2" value="max"><br><br>
  		
  			<input type="submit" value="Sign Up">
  		</p>
	</form>

	<!--footer-->
	<?php 
			include "common.php";
			echo $footer;
	?>
