<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.xXFkVSV' shared service.

return $this->privates['.service_locator.xXFkVSV'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'article' => ['privates', '.errored..service_locator.xXFkVSV.App\\Entity\\Article', NULL, 'Cannot autowire service ".service_locator.xXFkVSV": it references class "App\\Entity\\Article" but no such service exists.'],
    'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
], [
    'article' => 'App\\Entity\\Article',
    'entityManager' => '?',
]);
