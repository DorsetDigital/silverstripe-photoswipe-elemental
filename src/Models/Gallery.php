<?php

namespace DorsetDigital\Elements\PhotoSwipe\Models;

use Bummzack\SortableFile\Forms\SortableUploadField;
use DNADesign\Elemental\Models\BaseElement;
use DorsetDigital\Elements\PhotoSwipe\Controllers\GalleryController;
use SilverStripe\Assets\Image;
use SilverStripe\i18n\i18n;
use SilverStripe\Security\Security;
use SilverStripe\View\SSViewer;

class Gallery extends BaseElement
{
    private static $singular_name = 'Photoswipe Gallery';
    private static $plural_name = 'Photoswipe Galleries';
    private static $description = 'Responsive image gallery';
    private static $table_name = 'DorsetDigital_Elements_PhotoSwipe';
    private static $controller_class = GalleryController::class;

    private static $inline_editable = false;

    private static $casting = [
        'getSummary' => 'HTMLText'
    ];

    private static $many_many = [
        'GalleryImages' => Image::class
    ];

    private static $many_many_extraFields = [
        'GalleryImages' => [
            'SortOrder' => 'Int'
        ]
    ];

    private static $owns = [
        'GalleryImages'
    ];

    public function getCMSFields()
    {
        $fields = parent::getCMSFields();
        $fields->addFieldToTab('Root.Main', SortableUploadField::create(
            'GalleryImages', $this->owner->fieldLabel('Images')
        )->setFolderName('galleryimages')->setAllowedFileCategories('image/supported'));
        return $fields;
    }

    public function getSortedImages()
    {
        return $this->GalleryImages()->sort('SortOrder');
    }

    public function getType()
    {
        return 'Photoswipe Gallery';
    }

    protected function provideBlockSchema()
    {
        $blockSchema = parent::provideBlockSchema();
        $blockSchema[ 'content' ] = $this->getSummary();
        return $blockSchema;
    }

    public function getSummary()
    {
        return i18n::with_locale(Security::getCurrentUser()->Locale, function() {
            $template = SSViewer::get_templates_by_class(static::class, '_Summary');
            $summary = $this->renderWith($template);
            return $summary->RAW();
        });
    }
}