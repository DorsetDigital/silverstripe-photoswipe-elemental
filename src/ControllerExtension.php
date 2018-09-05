<?php
namespace DorsetDigital\SilverstripePhotoswipe;

use SilverStripe\Core\Extension;
use SilverStripe\View\Requirements;
use SilverStripe\View\ThemeResourceLoader;

class ControllerExtension extends Extension
{
    public function onAfterInit() {
        $scripts = [
            'dorsetdigital/silverstripe-photoswipe:client/dist/photoswipe.min.js',
            'dorsetdigital/silverstripe-photoswipe:client/dist/photoswipe-ui-default.min.js',
            'dorsetdigital/silverstripe-photoswipe:client/dist/gallery.js'
        ];

        Requirements::combine_files('gallery.js', $scripts, ['async' => true]);
        Requirements::css('dorsetdigital/silverstripe-photoswipe:client/dist/gallery.css');
    }
}