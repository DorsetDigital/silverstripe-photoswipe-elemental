# silverstripe-photoswipe-elemental

Add a responsive image gallery to a page using the Photoswipe library in an Elemental Block.

Includes gallery functionality along with a lazy-loader for the thumbnails to help with page-load efficiency.

[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/DorsetDigital/silverstripe-photoswipe-elemental/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/DorsetDigital/silverstripe-photoswipe-elemental/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/DorsetDigital/silverstripe-photoswipe-elemental/badges/build.png?b=master)](https://scrutinizer-ci.com/g/DorsetDigital/silverstripe-photoswipe-elemental/build-status/master)
[![License](https://img.shields.io/badge/License-BSD%203--Clause-blue.svg)](LICENSE.md)
[![Version](http://img.shields.io/packagist/v/dorsetdigital/silverstripe-photoswipe-elemental.svg?style=flat)](https://packagist.org/packages/dorsetdigital/silverstripe-cdnrewrite)

# Requirements
* Silverstripe 4.x
* bummzack/sortablefile
* dnadesign/silverstripe-elemental ^3 || ^4



# Installation
* Install the code with `composer require dorsetdigital/silverstripe-photoswipe-elemental`
* Run a `dev/build?flush` to update your project

# Usage
Once you have installed the module, you can simply add the new block to any Elemental page.  


The template which produces the standard gallery markup can be overridden, but please note that some of the markup structure is required to make everything work!


# Credits

* The superb PhotoSwipe library - http://photoswipe.com/
* Bummzack's sortable file extension for SS4 - https://github.com/bummzack/sortablefile
* Werner Krauss for his translation work and Elemental 4 updates - https://github.com/wernerkrauss