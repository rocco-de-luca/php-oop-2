
<?php
include_once __DIR__ . '/classes/Department.php';


$department = new Department('scarpe', 'maglie', 'pantaloni', 'red');

echo $department->getProduct();

var_dump($department);







