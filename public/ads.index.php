<?php

require_once('../bootstrap.php');

$ads = Ad::all();

require_once('../views/partials/htmlHeader.php');

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

<body>
	<? require_once("../views/partials/header.php"); ?>
	<div id="container">
		<? require_once("../views/partials/sidebar.php");  ?>

		<div id="content">

			<?php foreach($ads as $ad): ?>
			<tr>
				<td><?php echo $ad['item'];?>
					<a href="?show=<?php echo $ad['id']; ?>">
					<?php echo $ad['item']; ?>
					</a>
				</td>
			</tr>

			<?php endforeach; ?>




		</div>
	</div>

	<? require_once("../views/partials/footer.php"); ?>
	<? require_once("../views/partials/jscriptFooter.php"); ?>

</body>

</html>