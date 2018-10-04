<?php

namespace DorsetDigital\Elements;

use DNADesign\Elemental\Models\BaseElement;
use DorsetDigital\SilverstripePhotoswipe\GalleryController;
use SilverStripe\Assets\Image;
use Bummzack\SortableFile\Forms\SortableUploadField;

class Gallery extends BaseElement
{
    private static $singular_name = 'Photoswipe Gallery';
    private static $plural_name = 'Photoswipe Galleries';
    private static $description = 'Responsive image gallery';
    private static $table_name = 'DorsetDigital_Elements_PhotoSwipe';
    private static $controller_class = GalleryController::class;

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

}