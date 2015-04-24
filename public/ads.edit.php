<!DOCTYPE html>
<html>
<head>
	<title>Edit Ad</title>
	<? require_once("../views/partials/htmlHeader.php") ?>
</head>
<body>
	<? require_once("../views/partials/header.php"); ?>
	<div id="container">
		<? require_once("../views/partials/sidebar.php");  ?>

		<div id="content">

           <!--  // location (zip code - required)
            // location (address - not required -- can be placed on map)
            // post type
            // contact method (email, phone -- )
            // item name
            // item price
            // picture - not required
            // description  -->

            <!-- class="pure-form pure-form-stacked" -->
            <form id="adForm">
	                <fieldset>
	                    <br>
                        <legend>Edit Your Ad</legend>

	                    <label for="itemLocation">Location:</label>
	                    <input id="itemLocation" type="text" placeholder="ZIP code">
                        <br>
                        <br>
	                    <!-- <label for="category">Category</label>
	                    <input id="category" type="text" placeholder="Category"> -->
                        <label for="section">Section:</label>
                            <select id="section">
                                <option>Bikes</option>
                                <option>Furniture</option>
                                <option>Electronics</option>
                                <option>Clothes</option>
                                <option>Jobs</option>
                                <option>Cars</option>
                            </select>
                            <br>
                            <br>
	                        <label for="contacttype">Contact Type:</label>
                            <select id="contact">
	                            <option>text msg</option>
                                <option>email</option>
	                            <option>call</option>
	                        </select>
                            <br>
                            <br>

	                        <!-- <label for="remember" class="pure-checkbox">
	                            <input id="remember" type="checkbox"> Remember me
	                        </label> -->

                            <input type="file" name="pic" accept="image/*">

                        <br>
                        <br>
	                    <button type="submit" class="pure-button pure-button-primary">Update</button>
	                </fieldset>
	            </form>
		</div>
	</div>
	<? require_once("../views/partials/footer.php"); ?>
	<? require_once("../views/partials/jscriptFooter.php"); ?>
</body>
</html>