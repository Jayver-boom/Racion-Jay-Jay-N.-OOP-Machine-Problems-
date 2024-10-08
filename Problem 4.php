<?php 

class Vehicle {
    public $name;
    public $speed;
    public $mileage;

    public function __construct($name, $speed, $mileage) {
        $this->name = $name;
        $this->speed = $speed;
        $this->mileage = $mileage; 
    }

    public function displayVehicleInfo() {
        echo "Name: " . $this->name . "\n";
        echo "Speed: " . $this->speed . "\n";
        echo "Mileage: " . $this->mileage . "\n";
    }
}

class Bus extends Vehicle {
    public function seating_capacity($capacity = 50) {
        return "$this->name seating capacity is $capacity";
    }
}

$bus = new Bus("Banana Bus", 420, 7124);
echo $bus->seating_capacity();


?>
