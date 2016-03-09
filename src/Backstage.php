<?php

namespace App;

class Backstage extends Item{
  public function tick(){
    $this->sellIn -= 1;

    switch(true){
      case ($this->sellIn < 0):
        $this->quality = 0;
        break;
      case ($this->sellIn <= 5):
        $this->quality += 3;
        break;
      case ($this->sellIn <= 10):
        $this->quality += 2;
        break;
      default:
        $this->quality += 1;
        break;
    }


    if($this->quality > 50){
      $this->quality = 50;
    }
  }
}
