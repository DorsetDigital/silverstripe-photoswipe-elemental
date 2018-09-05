# silverstripe-photoswipe

Provides a simple way to embed a responsive image gallery on a page using the Photoswipe library.

Includes gallery functionality along with a lazy-loader for the thumbnails to help with page-load efficiency.

# Requirements
* Silverstripe 4.x
* bummzack/sortablefile

# Installation
* Install the code with `composer require dorsetdigital/silverstripe-photoswipe`
* Run a `dev/build?flush` to update your project

# Usage

By default, the module doesn't add anything to your site.  You can choose which page types you want extend with the addition of a yml config file.
You will need to add an extension to the Page class itself and to its controller for all the features to work.
The sample below adds gallery functionality to the base page class, so it would be available on any pages which extend that:

```yaml

---
Name: photoswipe-gallery
---

PageController:
  extensions:
    - DorsetDigital\SilverstripePhotoswipe\ControllerExtension

Page:
  extensions:
    - DorsetDigital\SilverstripePhotoswipe\PageExtension
```


To add the gallery to your actual page, you also need to add a new template variable, eg:

```php
<div class="mygalleryholder">
  $Gallery
</div>
```

The template which produces the standard gallery markup can be overridden, but please note that some of the markup structure is required to make everything work!


# Credits

* The superb PhotoSwipe library - http://photoswipe.com/
* Bummzack's sortable file extension for SS4 - https://github.com/bummzack/sortablefile