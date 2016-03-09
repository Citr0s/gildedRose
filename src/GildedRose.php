<?php

namespace App;

class GildedRose
{
    public static function of($name, $quality, $sellIn) {
        $items = [
          'normal' => Normal::class,
          'Aged Brie' => Brie::class,
          'Sulfuras, Hand of Ragnaros' => Sulfuras::class,
          'Backstage passes to a TAFKAL80ETC concert' => Backstage::class
        ];

        return new $items[$name]($name, $quality, $sellIn);
    }
  }
