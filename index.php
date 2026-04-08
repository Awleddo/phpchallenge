<?php

require_once "Schip.php";

$schip1 = new Schip("Titanic", 52310, 269);
$schip2 = new Schip("Zeemeeuw", 1800, 85);

$schip1->toonInfo();
$schip2->toonInfo();
