<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'liip_imagine.filter.manager' shared service.

include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Imagine/Filter/FilterManager.php';
include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Imagine/Filter/Loader/LoaderInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Imagine/Filter/Loader/RelativeResizeFilterLoader.php';
include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Imagine/Filter/Loader/ResizeFilterLoader.php';
include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Imagine/Filter/Loader/ThumbnailFilterLoader.php';
include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Imagine/Filter/Loader/CropFilterLoader.php';
include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Imagine/Filter/Loader/PasteFilterLoader.php';
include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Imagine/Filter/Loader/WatermarkFilterLoader.php';
include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Imagine/Filter/Loader/BackgroundFilterLoader.php';
include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Imagine/Filter/Loader/StripFilterLoader.php';
include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Imagine/Filter/Loader/ScaleFilterLoader.php';
include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Imagine/Filter/Loader/UpscaleFilterLoader.php';
include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Imagine/Filter/Loader/AutoRotateFilterLoader.php';
include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Imagine/Filter/PostProcessor/PostProcessorInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Imagine/Filter/PostProcessor/AbstractPostProcessor.php';
include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Imagine/Filter/PostProcessor/JpegOptimPostProcessor.php';
include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Imagine/Filter/PostProcessor/OptiPngPostProcessor.php';
include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Imagine/Filter/PostProcessor/PngquantPostProcessor.php';
include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Imagine/Filter/PostProcessor/MozJpegPostProcessor.php';
include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Imagine/Filter/PostProcessor/CwebpPostProcessor.php';
include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Imagine/Filter/Loader/GrayscaleFilterLoader.php';
include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Imagine/Filter/Loader/DownscaleFilterLoader.php';
include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Imagine/Filter/Loader/RotateFilterLoader.php';
include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Imagine/Filter/Loader/FlipFilterLoader.php';
include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Imagine/Filter/Loader/InterlaceFilterLoader.php';
include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Imagine/Filter/Loader/FixedFilterLoader.php';

$a = ($this->privates['liip_imagine.gd'] ?? $this->load('getLiipImagine_GdService.php'));

$this->services['liip_imagine.filter.manager'] = $instance = new \Liip\ImagineBundle\Imagine\Filter\FilterManager(($this->privates['liip_imagine.filter.configuration'] ?? $this->getLiipImagine_Filter_ConfigurationService()), $a, ($this->privates['liip_imagine.binary.mime_type_guesser'] ?? $this->load('getLiipImagine_Binary_MimeTypeGuesserService.php')));

$instance->addLoader('relative_resize', new \Liip\ImagineBundle\Imagine\Filter\Loader\RelativeResizeFilterLoader());
$instance->addLoader('resize', new \Liip\ImagineBundle\Imagine\Filter\Loader\ResizeFilterLoader());
$instance->addLoader('thumbnail', new \Liip\ImagineBundle\Imagine\Filter\Loader\ThumbnailFilterLoader());
$instance->addLoader('crop', new \Liip\ImagineBundle\Imagine\Filter\Loader\CropFilterLoader());
$instance->addLoader('grayscale', ($this->services['liip_imagine.filter.loader.grayscale'] ?? ($this->services['liip_imagine.filter.loader.grayscale'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\GrayscaleFilterLoader())));
$instance->addLoader('paste_image', new \Liip\ImagineBundle\Imagine\Filter\Loader\PasteFilterLoader($a, \dirname(__DIR__, 4)));
$instance->addLoader('paste', new \Liip\ImagineBundle\Imagine\Filter\Loader\PasteFilterLoader($a, (\dirname(__DIR__, 4).'/src')));
$instance->addLoader('watermark', new \Liip\ImagineBundle\Imagine\Filter\Loader\WatermarkFilterLoader($a, (\dirname(__DIR__, 4).'/src')));
$instance->addLoader('watermark_image', new \Liip\ImagineBundle\Imagine\Filter\Loader\WatermarkFilterLoader($a, \dirname(__DIR__, 4)));
$instance->addLoader('background', new \Liip\ImagineBundle\Imagine\Filter\Loader\BackgroundFilterLoader($a));
$instance->addLoader('strip', new \Liip\ImagineBundle\Imagine\Filter\Loader\StripFilterLoader());
$instance->addLoader('scale', new \Liip\ImagineBundle\Imagine\Filter\Loader\ScaleFilterLoader());
$instance->addLoader('upscale', new \Liip\ImagineBundle\Imagine\Filter\Loader\UpscaleFilterLoader());
$instance->addLoader('downscale', ($this->services['liip_imagine.filter.loader.downscale'] ?? ($this->services['liip_imagine.filter.loader.downscale'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\DownscaleFilterLoader())));
$instance->addLoader('auto_rotate', new \Liip\ImagineBundle\Imagine\Filter\Loader\AutoRotateFilterLoader());
$instance->addLoader('rotate', ($this->services['liip_imagine.filter.loader.rotate'] ?? ($this->services['liip_imagine.filter.loader.rotate'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\RotateFilterLoader())));
$instance->addLoader('flip', ($this->services['liip_imagine.filter.loader.flip'] ?? ($this->services['liip_imagine.filter.loader.flip'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\FlipFilterLoader())));
$instance->addLoader('interlace', ($this->services['liip_imagine.filter.loader.interlace'] ?? ($this->services['liip_imagine.filter.loader.interlace'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\InterlaceFilterLoader())));
$instance->addLoader('resample', ($this->services['liip_imagine.filter.loader.resample'] ?? $this->load('getLiipImagine_Filter_Loader_ResampleService.php')));
$instance->addLoader('fixed', ($this->services['liip_imagine.filter.loader.fixed'] ?? ($this->services['liip_imagine.filter.loader.fixed'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\FixedFilterLoader())));
$instance->addPostProcessor('jpegoptim', new \Liip\ImagineBundle\Imagine\Filter\PostProcessor\JpegOptimPostProcessor('/usr/bin/jpegoptim', true, NULL, true, NULL));
$instance->addPostProcessor('optipng', new \Liip\ImagineBundle\Imagine\Filter\PostProcessor\OptiPngPostProcessor('/usr/bin/optipng', 7, true, NULL));
$instance->addPostProcessor('pngquant', new \Liip\ImagineBundle\Imagine\Filter\PostProcessor\PngquantPostProcessor('/usr/bin/pngquant'));
$instance->addPostProcessor('mozjpeg', new \Liip\ImagineBundle\Imagine\Filter\PostProcessor\MozJpegPostProcessor('/opt/mozjpeg/bin/cjpeg'));
$instance->addPostProcessor('cwebp', new \Liip\ImagineBundle\Imagine\Filter\PostProcessor\CwebpPostProcessor('/usr/bin/cwebp', NULL, 75, 100, 4, 'fast', 1, false, $this->parameters['liip_imagine.cwebp.metadata']));

return $instance;
