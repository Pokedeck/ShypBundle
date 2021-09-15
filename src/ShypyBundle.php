<?php

namespace ShypyBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class ShypyBundle extends Bundle
{
  public function getPath(): string
  {
    return \dirname(__DIR__);
  }
}
