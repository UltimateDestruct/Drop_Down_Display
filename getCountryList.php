<?php
require_once("config.php");

	$stmt = $dbcon->prepare("SELECT countryid, countryname FROM countries");
    $stmt->execute();
?>
	<option value="">Select Country</option>
<?php
	while($row=$stmt->fetch(PDO::FETCH_ASSOC))
	{
	extract($row);
	?>
	<option value="<?=$countryid?>"><?=$countryname?></option>
<?php
	}
?>