<?php
namespace DorsetDigital\Elements\PhotoSwipe\Controllers;

use DNADesign\Elemental\Controllers\ElementController;
use SilverStripe\View\Requirements;
use SilverStripe\View\ThemeResourceLoader;

class GalleryController extends ElementController
{
    public function init() {
        parent::init();
        Requirements::javascript('dorsetdigital/silverstripe-photoswipe-elemental:client/dist/photoswipe.min.js');
        Requirements::javascript('dorsetdigital/silverstripe-photoswipe-elemental:client/dist/photoswipe-ui-default.min.js');
        Requirements::javascript('dorsetdigital/silverstripe-photoswipe-elemental:client/dist/gallery.min.js');
        Requirements::css('dorsetdigital/silverstripe-photoswipe-elemental:client/dist/gallery.css');
    }
}