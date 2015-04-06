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
  <link rel="import" href="./elements/card-element">
</head>
<?php

require_once('./config/constants.php');
require_once('./classes/production.php');
require_once('./helpers/setup_productions.php');
$products = get_productions();

?>
<body>
<div id="wrapper">
  <h1>elzup.com</h1>
  <div class="cards-box">
    <?php
    /** @var Production $p */
    foreach ($products as $p) { ?>
      <card-element name="カードタイトル" description="詳細分"></card-element>
    <?php } ?>
  </div>
</div>
</body>
</html>