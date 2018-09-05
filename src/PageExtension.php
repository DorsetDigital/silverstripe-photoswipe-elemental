<?php

namespace DorsetDigital\SilverstripePhotoswipe;

use SilverStripe\Assets\Image;
use SilverStripe\Forms\FieldList;
use SilverStripe\ORM\DataExtension;
use Bummzack\SortableFile\Forms\SortableUploadField;

class PageExtension extends DataExtension
{

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

    public function updateCMSFields(FieldList $fields)
    {
        $fields->addFieldToTab('Root.Gallery', SortableUploadField::create(
            'GalleryImages', $this->owner->fieldLabel('Images')
        )->setFolderName('galleryimages')->setAllowedFileCategories('image/supported'));
    }

    public function getGallery()
    {
        if ($this->owner->GalleryImages()->count() > 0) {
            $sortedImages = $this->owner->GalleryImages()->sort('SortOrder');
            return $this->owner->renderWith('Gallery', ['SortedImages' => $sortedImages]);
        }
    }

}