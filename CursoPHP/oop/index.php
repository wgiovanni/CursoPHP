<?php
include 'vehicles/Car.php';
include 'vehicles/Truck.php';
include 'vehicles/ToyCar.php';

use VehicleBase{Car, Truck, ToyCar};

try {
	echo 'Class ToyCar<br>';
	$ToyCar = new ToyCar('Alex');
	$ToyCar -> move();
} catch (Exception $e) {
	echo 'This is a toy<br>';
	//log...
} finally {
	echo 'finally<br><br>';
}

echo 'Class Car<br>';
$Car = new Car('Alex');
$Car -> move();
echo 'GPS pos: ' . $car->getPos();

//echo 'Owner car: ' . $car -> getOwner() . '<br>';

echo '<br>Class Truck<br>';
$truck = new Truck('Max', 'Pickup');
$truck -> move();
//echo 'Owner truck: ' . $truck -> getOwner() . '<br>';

echo '<br>Class Truck2<br>';
$truck2 = new Truck('Max', 'Pickup');
$truck2 -> move();
echo '<br>Total Truck: ' . Truck::getTotal() . '<br>';

$ser = serialize($car);
$newCar = unserialize($ser);

echo 'NewCar Owner ' . $newCar->getOwner() . '<br>';

?>