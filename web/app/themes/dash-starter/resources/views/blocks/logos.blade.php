{{-- 
  Title: Logos
  Description: Client logos with title
  Category: formatting
  Icon: admin-comments
  Keywords: faq, accordion, questions
  Mode: edit
  Align: none
  PostTypes: page post
  SupportsAlign: left right
  SupportsMode: true
  SupportsMultiple: false
  EnqueueStyle: styles/style.scss
  EnqueueScript: scripts/script.js
  EnqueueAssets: path/to/asset
--}}


@php
    if (have_rows('logos')) {
        $logos = get_field('logos');
    }
@endphp

<section class="logos bg-lightaccent">
    <h2 class="text-lg text-center py-[6rem] pb-[3rem] text-black font-semibold text-[20px]">{{ get_field('title') }}
    </h2>
    <div class="container mx-auto overflow-hidden">
        <div class="logos-block swiper-container container mx-auto pb-[6rem]">
            <div class="swiper-wrapper flex items-center justify-center">
                @if ($logos)
                    @foreach ($logos as $index => $logo)
                        <div class="swiper-slide ">
                            <img src="{{ $logo['logo']['url'] }}" alt="{{ $logo['logo']['alt'] }}"
                                class="w-full h-auto @if (is_page(555)) max-h-100px @else max-h-[38px] @endif object-contain">
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</section>
