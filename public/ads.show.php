<?php
require_once('../bootstrap.php');

	if(!empty($_GET)){
		$id=Input::get('show');
		// $ad=Ad::search($key, $value);
	}
	

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<? require_once("../views/partials/htmlHeader.php") ?>
</head>
<body>
	<? require_once("../views/partials/header.php"); ?>
	<div id="container">
		<? require_once("../views/partials/sidebar.php");  ?>

		<div id="content">

		</div>
	</div>
	<? require_once("../views/partials/footer.php"); ?>
	<? require_once("../views/partials/jscriptFooter.php"); ?>
</body>
</html>