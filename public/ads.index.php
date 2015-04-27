<?php

require_once('../bootstrap.php');
require_once('../views/partials/htmlHeader.php');

$ads = Ad::all();

if (Input::has('show'))
{
	$id = Input::get('show');
	header("Location:ads.show.php?show=$id");
	exit();
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Ads Index</title>
	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
</head>

<style type="text/css">
	#sidebar{
		margin-left: 0%;
	}
</style>


<body>
	<? require_once("../views/partials/header.php"); ?>
	<div id="container">
		<? require_once("../views/partials/sidebar.php");  ?>

		<div id="content">

			<?php foreach($ads as $ad): ?>
			<tr>
				<td>
					
					<a href="?show=<?php echo $ad['id']; ?>">
					<?php echo $ad['item']; ?>
					</a>
					<br>
				</td>
			</tr>
			<?php endforeach; ?>

		</div>
	</div>

	<? require_once("../views/partials/footer.php"); ?>
	<? require_once("../views/partials/jscriptFooter.php"); ?>

</body>

</html>