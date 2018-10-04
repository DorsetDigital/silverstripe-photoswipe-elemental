# silverstripe-photoswipe-elemental

Add a responsive image gallery to a page using the Photoswipe library in an Elemental Block.

Includes gallery functionality along with a lazy-loader for the thumbnails to help with page-load efficiency.

# Requirements
* Silverstripe 4.x
* bummzack/sortablefile
* dnadesign/silverstripe-elemental



# Installation
* Install the code with `composer require dorsetdigital/silverstripe-photoswipe-elemental`
* Run a `dev/build?flush` to update your project

# Usage
Once you have installed the module, you can simply add the new block to any Elemental page.  


The template which produces the standard gallery markup can be overridden, but please note that some of the markup structure is required to make everything work!


# Credits

* The superb PhotoSwipe library - http://photoswipe.com/
* Bummzack's sortable file extension for SS4 - https://github.com/bummzack/sortablefile