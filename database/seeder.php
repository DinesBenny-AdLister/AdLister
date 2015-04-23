<?php

$dbc = new PDO('mysql:host=127.0.0.1;dbname=adlister_db',"adlister_user","password");

$dbc->exec(
"TRUNCATE TABLE IF EXISTS users");
$dbc->exec(
"TRUNCATE TABLE IF EXISTS ads");
$dbc->exec(
"TRUNCATE TABLE IF EXISTS tags");


$users=[
	["MoneyBenny", "money@benny.tool", "1234321", "210.123.4567", null], 
	["RyDi", "dinesm@n.sucks", "SUPERSECRET", "2109876543", null],
	["Sarah Jessica Parker", "SJP@horse.com", "neeeeeeigh27", "210-8492333", null]
];

	$query =  "INSERT INTO users (username, email, password, phone_number, user_pic) 
			   VALUES (:username, :email, :password, :phone_number, :user_pic)";
	$stmt = $dbc->prepare($query);

foreach($users as $user){
	
	$stmt->bindValue(":username",     $user[0], PDO::PARAM_STR);
	$stmt->bindValue(":email",        $user[1], PDO::PARAM_STR);
	$stmt->bindValue(":password",     $user[2], PDO::PARAM_STR);
	$stmt->bindValue(":phone_number", $user[3], PDO::PARAM_STR);
	$stmt->bindValue(":user_pic",      $user[4], PDO::PARAM_NULL);

	$stmt->execute();
}


$ads= [
	["A Single Taco", "Bikes", "15", null, "I bought way too many tacos, and now I have an extra one. I spent $15 on em, so I'd like to at least break even. Pls no lowball offers! kthx", "MoneyBenny"],
	["100 lbs of Hay", "Food", "500", null, "My neeeeeighbor recently took a vacation. So I thought to myself, hey, let's sell her stuff! So I am. Buy her hay. Now.", "Sarah Jessica Parker"]
];

	$query = "INSERT INTO ads ( item, section, price, item_pic, description, user) 
			   VALUES (:item, :section, :price, :item_pic, :description, :user)";
	$stmt = $dbc->prepare($query);

foreach ($ads as $ad) {
	
	$stmt->bindValue(":item", $ad[0], PDO::PARAM_STR);
	$stmt->bindValue(":section", $ad[1], PDO::PARAM_STR);
	$stmt->bindValue(":price", $ad[2], PDO::PARAM_STR);
	$stmt->bindValue(":item_pic", $ad[3], PDO::PARAM_NULL);
	$stmt->bindValue(":description", $ad[4], PDO::PARAM_STR);
	$stmt->bindValue(":user", $ad[5], PDO::PARAM_STR);

	$stmt->execute();
}

$tags = [
	["tag1", '1'],
	['tag1', '2'],
	['tag2', '1'],
];

	$query = "INSERT INTO tags (tag, item_id) 
			   VALUES (:tag, :item_id)";
	$stmt = $dbc->prepare($query);
foreach ($tags as $tag) {
	

	$stmt->bindValue(":tag", $tag[0], PDO::PARAM_STR);
	$stmt->bindValue(":item_id", $tag[1], PDO::PARAM_INT);

	$stmt->execute();
}


?>
