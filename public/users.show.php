<!DOCTYPE html>
<html>
<head>
	<title></title>
	<? require_once("../views/partials/htmlHeader.php") ?>
	<style type="text/css">
		#profPic{
			
			height: 200px;
			width: 200px;
		}

		#profPicDiv{
			float: right;
		}
	</style>
</head>
<body>
	<? require_once("../views/partials/header.php"); ?>
	<div id="container">
		<? require_once("../views/partials/sidebar.php");  ?>

		<div id="content">
			<div id="profPicDiv" >
				<img id="profPic" src="img/MalePeacockSpider.jpg">
			</div>
		</div>
	</div>
	<? require_once("../views/partials/footer.php"); ?>
	<? require_once("../views/partials/jscriptFooter.php"); ?>
</body>
</html>