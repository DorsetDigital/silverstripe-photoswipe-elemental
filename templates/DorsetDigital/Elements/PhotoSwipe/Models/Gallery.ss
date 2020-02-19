<% if $Title && $ShowTitle %>
    <div class="gallerytitle_holder">
        <h2 class="gallerytitle">$Title</h2>
    </div>
<% end_if %>
<div class="row py-4 picture photoswipegallery" itemscope itemtype="http://schema.org/ImageGallery">
    <% loop $SortedImages %>
        <% include DorsetDigital\\Elements\\PhotoSwipe\\Models\\GalleryImage %>
    <% end_loop %>
</div>

<% include DorsetDigital\\Elements\\PhotoSwipe\\Models\\PhotoSwipe %>
