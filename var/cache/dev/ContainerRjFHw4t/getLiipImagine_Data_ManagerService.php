<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'liip_imagine.data.manager' shared service.

include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Imagine/Data/DataManager.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/mime/MimeTypeGuesserInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/mime/MimeTypesInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/mime/MimeTypes.php';

$this->services['liip_imagine.data.manager'] = $instance = new \Liip\ImagineBundle\Imagine\Data\DataManager(($this->privates['liip_imagine.binary.mime_type_guesser'] ?? $this->load('getLiipImagine_Binary_MimeTypeGuesserService.php')), \Symfony\Component\Mime\MimeTypes::getDefault(), ($this->privates['liip_imagine.filter.configuration'] ?? $this->getLiipImagine_Filter_ConfigurationService()), 'flysystem_loader', NULL);

$instance->addLoader('flysystem_loader', ($this->services['liip_imagine.binary.loader.flysystem_loader'] ?? $this->load('getLiipImagine_Binary_Loader_FlysystemLoaderService.php')));
$instance->addLoader('default', ($this->services['liip_imagine.binary.loader.default'] ?? $this->load('getLiipImagine_Binary_Loader_DefaultService.php')));

return $instance;
