<?php

require_once "Schip.php";
require_once "container.php";
require_once "meester.php";

$schip1 = new Schip("Titanic", 52310, 269);
$schip2 = new Schip("Zeemeeuw", 1800, 85);

$container1 = new Container("1234", "Goud");
$container2 = new Container("5678", "Zilver");

$container1->unlock("1234");
$container2->unlock("5678");

$schip1->voegContainerToe($container1);
$schip2->voegContainerToe($container2);

$meester = new Meester();
$meester->voegSchipToe("schip1", $schip1);
$meester->voegSchipToe("schip2", $schip2);

$meester->toonOverzicht();
