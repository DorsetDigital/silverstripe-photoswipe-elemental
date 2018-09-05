<?php
namespace DorsetDigital\SilverstripePhotoswipe;

use SilverStripe\Core\Extension;
use SilverStripe\View\Requirements;
use SilverStripe\View\ThemeResourceLoader;

class ControllerExtension extends Extension
{
    public function onAfterInit() {
        $scripts = [
            'dorsetdigital/silverstripe-photoswipe:dist/photoswipe.min.js',
            'dorsetdigital/silverstripe-photoswipe:dist/photoswipe-ui-default.min.js',
            'dorsetdigital/silverstripe-photoswipe:dist/gallery.js'
        ];
        $styles = [
            'dorsetdigital/silverstripe-photoswipe:dist/photoswipe.css'
        ];
        Requirements::combine_files('gallery.js', $scripts);
        Requirements::combine_files('gallery.css', $styles);
    }
}