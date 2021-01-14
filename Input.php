<?php

class Input
{
  public static function read()
  {
    return trim(fgets(STDIN));
  }
}
