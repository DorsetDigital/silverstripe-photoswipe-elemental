// progressive-image.js
if (window.addEventListener && window.requestAnimationFrame && document.getElementsByClassName)
 window.addEventListener('load', function () {

  // start
  var pItem = document.getElementsByClassName('progressive replace'), timer;

  window.addEventListener('scroll', scroller, false);
  window.addEventListener('resize', scroller, false);
  inView();


  // throttled scroll/resize
  function scroller(e) {

   timer = timer || setTimeout(function () {
    timer = null;
    requestAnimationFrame(inView);
   }, 300);

  }


  // image in view?
  function inView() {

   var wT = window.pageYOffset, wB = wT + window.innerHeight, cRect, pT, pB, p = 0;
   while (p < pItem.length) {

    cRect = pItem[p].getBoundingClientRect();
    pT = wT + cRect.top;
    pB = pT + cRect.height;

    if (wT < pB && wB > pT) {
     loadFullImage(pItem[p]);
     pItem[p].classList.remove('replace');
    } else
     p++;

   }

  }


  // replace with full image
  function loadFullImage(item) {

   if (!item || !item.href)
    return;

   // load image
   var img = new Image();
//   if (item.dataset) {
//    img.srcset = item.dataset.srcset || '';
//    img.sizes = item.dataset.sizes || '';
//   }
   img.src = item.dataset.thumb;
   img.className = 'reveal img-fluid img-thumbnail';
   if (img.complete)
    addImg();
   else
    img.onload = addImg;

   // replace image
   function addImg() {

    // disable click
    //item.addEventListener('click', function (e) {
    // e.preventDefault();
    //}, false);

    // add full image
    item.appendChild(img).addEventListener('animationend', function (e) {

     // remove preview image
     var pImg = item.querySelector && item.querySelector('img.preview');
     if (pImg) {
      e.target.alt = pImg.alt || '';
      item.removeChild(pImg);
      e.target.classList.remove('reveal');
     }

    });

   }

  }

 }, false);


jQuery(document).ready(function ($) {


 (function ($) {
  var $pswp = $('.pswp')[0];
  var image = [];

  $('.picture').each(function () {
   var $pic = $(this),
           getItems = function () {
            var items = [];
            $pic.find('a').each(function () {
             var $href = $(this).attr('href'),
                     $size = $(this).data('size').split('x'),
                     $width = $size[0],
                     $height = $size[1];

             var item = {
              src: $href,
              w: $width,
              h: $height
             }

             items.push(item);
            });
            return items;
           }

   var items = getItems();


   $pic.on('click', 'figure', function (event) {
    event.preventDefault();

    var $index = $(this).index();
    var options = {
     index: $index,
     bgOpacity: 0.9,
     showHideOpacity: true
    }

    var lightBox = new PhotoSwipe($pswp, PhotoSwipeUI_Default, items, options);
    lightBox.init();
   });
  });
 })(jQuery);

});