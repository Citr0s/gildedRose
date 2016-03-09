<?php

namespace App;

abstract class Item{
  public function __construct($name, $quality, $sellIn)
  {
      $this->name = $name;
      $this->quality = $quality;
      $this->sellIn = $sellIn;
  }

  abstract public function tick();
}
