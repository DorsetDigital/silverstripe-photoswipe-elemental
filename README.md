# silverstripe-photoswipe-elemental

Adds a responsive image gallery as an Elemental block on a page using the Photoswipe library.

Includes gallery functionality along with a lazy-loader for the thumbnails to help with page-load efficiency.

# Requirements
* Silverstripe 4.x
* bummzack/sortablefile
* dnadesign/silverstripe-elemental



# Installation
* Install the code with `composer require dorsetdigital/silverstripe-photoswipe-elemental`
* Run a `dev/build?flush` to update your project

# Usage

Simply select the block from the list when creating your Elemental page.
The template which produces the standard gallery markup can be overridden, but please note that some of the markup structure is required to make everything work!


# Credits

* The superb PhotoSwipe library - http://photoswipe.com/
* Bummzack's sortable file extension for SS4 - https://github.com/bummzack/sortablefile