<?php

require_once 'Schip.php';
require_once 'container.php';

$schip1 = new Schip("Titanic", 52310, 269);
$schip2 = new Schip("Zeemeeuw", 1800, 85);

$container1 = new Container("1234", "Goud");
$container2 = new Container("5678", "Zilver");

$container1->unlock("1234");
$container2->unlock("5678");

$haven = [
    "schip1" => ["schip" => $schip1, "containers" => [$container1]],
    "schip2" => ["schip" => $schip2, "containers" => [$container2]]
];

foreach ($haven as $key => $data) {
    $data["schip"]->toonInfo();
    echo "Containers op dit schip:<br>";
    foreach ($data["containers"] as $container) {
        echo "Inhoud: " . $container->getContent() . "<br>";
    }
    echo "<br>";
}

?>