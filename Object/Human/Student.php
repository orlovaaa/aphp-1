<?php
declare(strict_types=1);

namespace Object\Human;

class Student {
  public string $name;
  public string $surname;
  public int $age;

  public function sayHello(): string {
    return "Hello, my name is " . $this->name . " " . $this->surname . PHP_EOL;
  }

  public function myAge() {
    return "I am " . $this->age . " years old." . PHP_EOL;
  }
};