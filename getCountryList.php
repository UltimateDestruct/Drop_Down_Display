<?php
require_once("config.php");

if(isset($_POST["category"])) {
	$stmt = $dbcon->prepare("SELECT reportid, name FROM report WHERE category = '" . $_POST["category"] . "'");
    $stmt->execute();
?>
	<option value="">Select Report</option>
<?php
	while($row=$stmt->fetch(PDO::FETCH_ASSOC))
	{
	extract($row);
	?>
	<option value="<?=$reportid?>"><?=$name?></option>
<?php
	}
}
?>