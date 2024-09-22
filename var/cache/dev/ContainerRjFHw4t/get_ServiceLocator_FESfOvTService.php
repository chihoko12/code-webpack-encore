<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.FESfOvT' shared service.

return $this->privates['.service_locator.FESfOvT'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
    'reference' => ['privates', '.errored..service_locator.FESfOvT.App\\Entity\\ArticleReference', NULL, 'Cannot autowire service ".service_locator.FESfOvT": it references class "App\\Entity\\ArticleReference" but no such service exists.'],
    'uploaderHelper' => ['privates', 'App\\Service\\UploaderHelper', 'getUploaderHelperService.php', true],
], [
    'entityManager' => '?',
    'reference' => 'App\\Entity\\ArticleReference',
    'uploaderHelper' => 'App\\Service\\UploaderHelper',
]);
