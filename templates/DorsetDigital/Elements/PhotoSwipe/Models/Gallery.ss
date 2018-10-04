<% if $Title && $ShowTitle %>
    <div class="gallerytitle_holder">
        <h2 class="gallerytitle">$Title</h2>
    </div>
<% end_if %>
<div class="row py-4 picture photoswipegallery" itemscope itemtype="http://schema.org/ImageGallery">
    <% loop $SortedImages %>
        <figure class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4" itemprop="associatedMedia" itemscope
                itemtype="http://schema.org/ImageObject">
            <a itemprop="contentUrl" data-size="{$ScaleWidth(1024).Width}x{$ScaleWidth(1024).Height}" data-index="$Pos"
               class="progressive replace" data-thumb="$ScaleWidth(500).CropHeight(300).URL"
               href="$ScaleWidth(1024).URL">
                <img src="$ScaleWidth(15).CropHeight(9).URL" class="img-fluid img-thumbnail preview"
                     alt="$Top.Title Image"/>
            </a>
        </figure>
    <% end_loop %>
</div>

<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="pswp__bg"></div>
    <div class="pswp__scroll-wrap">

        <div class="pswp__container">
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
        </div>

        <div class="pswp__ui pswp__ui--hidden">
            <div class="pswp__top-bar">
                <div class="pswp__counter"></div>
                <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                <button class="pswp__button pswp__button--share" title="Share"></button>
                <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                <div class="pswp__preloader">
                    <div class="pswp__preloader__icn">
                        <div class="pswp__preloader__cut">
                            <div class="pswp__preloader__donut"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                <div class="pswp__share-tooltip"></div>
            </div>
            <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
            </button>
            <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
            </button>
            <div class="pswp__caption">
                <div class="pswp__caption__center"></div>
            </div>
        </div>
    </div>
</div>
