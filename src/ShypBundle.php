<?php

namespace ShypBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class ShypBundle extends Bundle
{
  public function getPath(): string
  {
    return \dirname(__DIR__);
  }
}
