{{--
  Title: Masonry Gallery
  Description: Masonry layout gallery using ACF Gallery field
  Category: media
  Icon: images-alt2
  Keywords: masonry gallery images photos
  Mode: edit
  Align: none
  PostTypes: page post
  SupportsAlign: true
  SupportsMode: false
  SupportsMultiple: false 
  EnqueueStyle: styles/style.scss
  EnqueueScript: scripts/script.js
  EnqueueAssets: path/to/asset
--}}
<section class="container mx-auto my-[3rem]">
    <div id="photo-gallery" class="columns-5 gap-x-2">
        @php
            $gallery = get_field('gallery');
        @endphp

        @if ($gallery)
            @foreach ($gallery as $image)
                <div class="masonry-gallery__item">
                    <img src="{{ $image['url'] }}" alt="{{ $image['alt'] }}" class="w-full">
                </div>
            @endforeach
        @endif
    </div>
</section>