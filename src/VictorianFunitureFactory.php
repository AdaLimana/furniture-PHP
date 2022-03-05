<?php

namespace Adair\Furniture;

class VictorianFunitureFactory implements FurnitureFactory
{
  public function createChair(): Chair
  {
    return new VictorianChair();
  }

  public function createSofa(): Sofa
  {
    return new VictorianSofa();
  }

  public function createTable(): Table
  {
    return new VictorianTable();
  }
}