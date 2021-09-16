<?php

namespace ShypyBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Doctrine\Bundle\DoctrineBundle\DependencyInjection\Compiler\DoctrineOrmMappingsPass;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class ShypyBundle extends Bundle
{
  /**
   * {@inheritDoc}
   */
  public function build(ContainerBuilder $container)
  {
      parent::build($container);

      // With Yaml configuration format
      $container->addCompilerPass(DoctrineOrmMappingsPass::createYamlMappingDriver(array(
          realpath(__DIR__ . '/Resources/config/doctrine-mapping') => 'AppBundle\Model'
      )));

      // With annotation configuration format
      $container->addCompilerPass(DoctrineOrmMappingsPass::createAnnotationMappingDriver(array(
          'AppBundle\Model'
      )));
  }

  public function getPath(): string
  {
    return \dirname(__DIR__);
  }
}
