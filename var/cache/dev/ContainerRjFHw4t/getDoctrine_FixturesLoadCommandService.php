<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'doctrine.fixtures_load_command' shared service.

include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Command/DoctrineCommand.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-fixtures-bundle/Command/LoadDataFixturesDoctrineCommand.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/data-fixtures/lib/Doctrine/Common/DataFixtures/Loader.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/doctrine-bridge/DataFixtures/ContainerAwareLoader.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-fixtures-bundle/Loader/SymfonyFixturesLoader.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/data-fixtures/lib/Doctrine/Common/DataFixtures/FixtureInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/data-fixtures/lib/Doctrine/Common/DataFixtures/SharedFixtureInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/data-fixtures/lib/Doctrine/Common/DataFixtures/AbstractFixture.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-fixtures-bundle/ORMFixtureInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-fixtures-bundle/Fixture.php';
include_once \dirname(__DIR__, 4).'/src/DataFixtures/BaseFixture.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/data-fixtures/lib/Doctrine/Common/DataFixtures/DependentFixtureInterface.php';
include_once \dirname(__DIR__, 4).'/src/DataFixtures/ArticleFixtures.php';
include_once \dirname(__DIR__, 4).'/src/DataFixtures/CommentFixture.php';
include_once \dirname(__DIR__, 4).'/src/DataFixtures/TagFixture.php';
include_once \dirname(__DIR__, 4).'/src/DataFixtures/UserFixture.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-fixtures-bundle/Purger/PurgerFactory.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-fixtures-bundle/Purger/ORMPurgerFactory.php';

$a = new \Doctrine\Bundle\FixturesBundle\Loader\SymfonyFixturesLoader($this);
$a->addFixtures([0 => ['fixture' => new \App\DataFixtures\ArticleFixtures(($this->privates['App\\Service\\UploaderHelper'] ?? $this->load('getUploaderHelperService.php'))), 'groups' => []], 1 => ['fixture' => new \App\DataFixtures\CommentFixture(), 'groups' => []], 2 => ['fixture' => new \App\DataFixtures\TagFixture(), 'groups' => []], 3 => ['fixture' => new \App\DataFixtures\UserFixture(($this->services['security.password_encoder'] ?? $this->load('getSecurity_PasswordEncoderService.php'))), 'groups' => []]]);

$this->privates['doctrine.fixtures_load_command'] = $instance = new \Doctrine\Bundle\FixturesBundle\Command\LoadDataFixturesDoctrineCommand($a, ($this->services['doctrine'] ?? $this->getDoctrineService()), ['default' => new \Doctrine\Bundle\FixturesBundle\Purger\ORMPurgerFactory()]);

$instance->setName('doctrine:fixtures:load');

return $instance;
