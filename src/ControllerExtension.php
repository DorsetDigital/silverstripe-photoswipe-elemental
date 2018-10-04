<?php
namespace DorsetDigital\Elements;

use SilverStripe\Core\Extension;
use SilverStripe\View\Requirements;
use SilverStripe\View\ThemeResourceLoader;

class ControllerExtension extends Extension
{
    public function onAfterInit() {
        Requirements::javascript('dorsetdigital/silverstripe-photoswipe:client/dist/gallery.js');
        Requirements::css('dorsetdigital/silverstripe-photoswipe:client/dist/gallery.css');
    }
}