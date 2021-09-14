<?php

namespace ShopBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class ShopBundle extends Bundle
{
  public function getPath(): string
  {
    return \dirname(__DIR__);
  }
}
