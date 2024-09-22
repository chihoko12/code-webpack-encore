<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.aiYcjJD' shared service.

return $this->privates['.service_locator.aiYcjJD'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'article' => ['privates', '.errored..service_locator.aiYcjJD.App\\Entity\\Article', NULL, 'Cannot autowire service ".service_locator.aiYcjJD": it references class "App\\Entity\\Article" but no such service exists.'],
    'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
    'serializer' => ['services', 'serializer', 'getSerializerService.php', true],
    'uploaderHelper' => ['privates', 'App\\Service\\UploaderHelper', 'getUploaderHelperService.php', true],
    'validator' => ['services', 'validator', 'getValidatorService', false],
], [
    'article' => 'App\\Entity\\Article',
    'entityManager' => '?',
    'serializer' => '?',
    'uploaderHelper' => 'App\\Service\\UploaderHelper',
    'validator' => '?',
]);
