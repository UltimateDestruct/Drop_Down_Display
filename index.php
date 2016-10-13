<html>
<head>
<link rel="stylesheet"
  href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
  integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
  crossorigin="anonymous">
	<style type="text/css">
		select{
		 padding:5px;
		 border-radius:3px;
		}
	</style>
	
</head>
<body>

<div class="container">

	<select id="countryList">
		<option value="">Please select a country</option>
		<?php
			require_once 'config.php';
		
			//Populate the list of reports
			$stmt = $dbcon->prepare('SELECT countryname FROM countries');
			$stmt->execute();
			
			while($row=$stmt->fetch(PDO::FETCH_ASSOC))
			{
				extract($row);
				echo "<option value='$countryname'>$countryname</option>";
			}
		?>
	</select>
	<br>
	<input type='text' id="displayCountry">
	
	<script>
	$(document).ready(function() {	

		$("#countryList").change(function(){
			$("#displayCountry").text("HelloWorld");
			console.log("hello world");
		});

	});
	</script>
		
</body>
</html>