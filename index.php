
<?php
include_once __DIR__ . '/classes/Department.php';


$department = new Department('scarpe', 'maglie', 'pantaloni', 'red', 38);

echo $department->getProduct();

var_dump($department);


