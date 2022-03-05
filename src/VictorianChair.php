<?php

namespace Adair\Furniture;

class VictorianChair implements Chair
{
  public function onSit()
  {
    echo 'Sentando na cadeira vitoriana';
  }
}