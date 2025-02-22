<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'console.command.translation_debug' shared service.

include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/TranslationDebugCommand.php';

$this->privates['console.command.translation_debug'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\TranslationDebugCommand(($this->services['translator'] ?? $this->getTranslatorService()), ($this->privates['translation.reader'] ?? $this->load('getTranslation_ReaderService.php')), ($this->privates['translation.extractor'] ?? $this->load('getTranslation_ExtractorService.php')), (\dirname(__DIR__, 4).'/translations'), (\dirname(__DIR__, 4).'/templates'), [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations')], [0 => (\dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Resources/views/Form'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/TranslationDebugCommand.php'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Core/Type/ChoiceType.php'), 3 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Core/Type/FileType.php'), 4 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Core/Type/TransformationFailureExtension.php'), 5 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Validator/Type/UploadValidatorExtension.php'), 6 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Csrf/Type/FormTypeCsrfExtension.php'), 7 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Util/LegacyTranslatorProxy.php'), 8 => (\dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/CacheWarmer/TranslationsCacheWarmer.php'), 9 => (\dirname(__DIR__, 4).'/vendor/symfony/translation/DataCollector/TranslationDataCollector.php'), 10 => (\dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/TranslationExtension.php'), 11 => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-time-bundle/DateTimeFormatter.php'), 12 => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-paginator-bundle/Helper/Processor.php')]);

$instance->setName('debug:translation');

return $instance;
