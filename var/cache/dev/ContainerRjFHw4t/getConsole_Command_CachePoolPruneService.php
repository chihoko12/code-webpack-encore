<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'console.command.cache_pool_prune' shared service.

include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/CachePoolPruneCommand.php';

$this->privates['console.command.cache_pool_prune'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\CachePoolPruneCommand(new RewindableGenerator(function () {
    yield 'cache.app' => ($this->services['cache.app'] ?? $this->getCache_AppService());
    yield 'cache.system' => ($this->services['cache.system'] ?? $this->getCache_SystemService());
    yield 'cache.validator' => ($this->privates['cache.validator'] ?? $this->getCache_ValidatorService());
    yield 'cache.serializer' => ($this->privates['cache.serializer'] ?? $this->getCache_SerializerService());
    yield 'cache.annotations' => ($this->privates['cache.annotations'] ?? $this->getCache_AnnotationsService());
    yield 'cache.property_info' => ($this->privates['cache.property_info'] ?? $this->getCache_PropertyInfoService());
    yield 'cache.flysystem.psr6' => ($this->privates['cache.flysystem.psr6'] ?? $this->getCache_Flysystem_Psr6Service());
    yield 'cache.doctrine.orm.default.metadata' => ($this->privates['cache.doctrine.orm.default.metadata'] ?? $this->getCache_Doctrine_Orm_Default_MetadataService());
    yield 'cache.doctrine.orm.default.result' => ($this->privates['cache.doctrine.orm.default.result'] ?? $this->getCache_Doctrine_Orm_Default_ResultService());
    yield 'cache.doctrine.orm.default.query' => ($this->privates['cache.doctrine.orm.default.query'] ?? $this->getCache_Doctrine_Orm_Default_QueryService());
    yield 'cache.security_expression_language' => ($this->privates['cache.security_expression_language'] ?? $this->getCache_SecurityExpressionLanguageService());
    yield 'cache.webpack_encore' => ($this->privates['cache.webpack_encore'] ?? $this->getCache_WebpackEncoreService());
}, 12));

$instance->setName('cache:pool:prune');

return $instance;
