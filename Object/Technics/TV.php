<?php
declare(strict_types=1);

namespace Object\Technics;

class TV {
  public string $brand;
  public string $color;

  public function turnOn() {
    echo "TV включен" . PHP_EOL;
  }

  public function turnOff() {
    echo "TV выключен" . PHP_EOL;
  }
}