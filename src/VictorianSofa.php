<?php

namespace Adair\Furniture;

class VictorianSofa implements Sofa
{
  public function onSleep()
  {
    echo 'Deitando no sofa vitoriano';
  }
}