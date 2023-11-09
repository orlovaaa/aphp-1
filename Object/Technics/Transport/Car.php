<?php
declare(strict_types=1);

namespace Object\Technics\Transport;

class Car {
  public string $brand;
  public string $color;
  private $engineStarted = false;

  public function startEngine() {
    $this->engineStarted = true;
    echo "Двигатель запущен" . PHP_EOL;
  }

  public function turnOnHeadlights() {
    if ($this->engineStarted) {
      echo "Фары включены" . PHP_EOL;
    } else {
      echo "Сначала нужно завести двигатель" . PHP_EOL;
    }
  }
};
