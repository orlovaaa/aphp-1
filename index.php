<?php
declare(strict_types=1);

require_once 'autoload.php';

use Object\Technics\Transport\Car;
use Object\Technics\TV;
use Object\Human\Student;

$student = new Student();
$student->name = "Stefani";
$student->surname = "Orlova";
$student->age = 24;
echo $student->sayHello();
echo $student->myAge();

$car = new Car();
$car->brand = "BMW";
$car->color = "red";
$car->startEngine();
$car->turnOnHeadlights();

$tv = new TV();
$tv->brand = "Samsung";
$tv->color = "black";
$tv->turnOn();
$tv->turnOff();