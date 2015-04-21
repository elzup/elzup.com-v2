<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<title>elzup.com</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- build-->
	<link rel="stylesheet" href="./bower_components/normalize-css/normalize.css">
	<link rel="stylesheet" href="./styles/core.css">
	<script src="./bower_components/jquery/dist/jquery.min.js"></script>
	<!-- import polymer elements-->
	<script src="./bower_components/webcomponentsjs/webcomponents.min.js"></script>
	<link rel="import" href="./bower_components/polymer/polymer.html">
	<link rel="import" href="./elements/top-panel">
	<link rel="import" href="./elements/toplink-panel">
</head>
<?php

require_once('./config/constants.php');
require_once('./classes/production.php');
require_once('./helpers/setup_productions.php');
// $products = get_productions();

?>
<body>
<div id="wrapper">
	<h1 id="top-title">elzup.com</h1>

	<nav class="flex top">
		<top-panel name="Profile" href="profile"></top-panel>
		<top-panel name="Products" href="products"></top-panel>
		<top-panel name="Activity" href="activity"></top-panel>
		<div id="links" class="flex">
			<toplink-panel
				name="Twitter"
				href="https://twitter.com/Arzzup"
				color="#55acee"
				></toplink-panel>
			<toplink-panel
				name="Facebook"
				href="https://www.facebook.com/takahashiroto"
				color="#3b5998"
				></toplink-panel>
			<toplink-panel
				name="Github"
				href="https://github.com/elzzup"
				color="#555"
				></toplink-panel>
			<toplink-panel
				name="Qiita"
				href="http://twitter.com/arzzup"
				color="#64c914"
				></toplink-panel>
			<toplink-panel
				name="Hatena"
				href="http://twitter.com/arzzup"
				color="#F26C68"
				></toplink-panel>
			<toplink-panel
				name="Tumblr"
				href="http://twitter.com/arzzup"
				color="#34526f"
				></toplink-panel>
		</div>
	</nav>
</div>

</body>
</html>