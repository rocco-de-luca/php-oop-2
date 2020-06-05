
<?php
include_once __DIR__ . '/classes/Repart.php';


$repart = new Repart('scarpe', 'maglie', 'pantaloni', 'red', 38);

echo $repart-getProduct();

var_dump($repart);

