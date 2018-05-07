<?php
namespace Vehicles;

require_once 'VehicleBase.php';

class Car extends VehicleBase {
	public function move(){
		echo $this->startEngine() . '<br>';
		echo 'Car: moving<br>';
	}

	public function startEngine(){
		//lanzar un excepcion
		throw new \Exception('Engine not found');
		
	}

}
?>