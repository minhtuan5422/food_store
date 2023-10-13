<?php 
session_start();
define("PUBLIC_URL", "http://localhost/food_store/");
define("IMG_PATH", "http://localhost/food_store/public/imgs/");
require_once "./mvc/Bridge.php";
$myApp = new App();
?>