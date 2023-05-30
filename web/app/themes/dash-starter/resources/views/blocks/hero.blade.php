{{--
  Title: Hero
  Description: Hero section
  Category: formatting
  Icon: superhero
  Keywords: hero
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
    $showVideo = get_field('show_video');
    $backgroundStyle = $showVideo === false ? 'style="background-image:url(\'' . get_field('background_image') . '\')"' : '';
@endphp

<section data-{{ $block['id'] }} class="flex items-center hero bg-cover bg-center min-h-[100vh] relative"
    {!! $backgroundStyle !!}>
    @if ($showVideo)
        <video autoplay playsinline loop muted class="absolute top-0 left-0 w-full h-full object-cover">
            <source src="{{ get_field('background_video') }}" type="video/mp4">
        </video>
        <div class="absolute top-0 left-0 w-full h-full">
            <img src="{{ get_field('image_overlay') }}" alt="Image Overlay" class="object-cover w-full h-full">
        </div>
    @endif
    <div class="container mx-auto px-4 py-12 md:py-32 gap-5 relative">
        <h1 class="font-medium text-white  hero__title mb-4  mb-2  title-lg">
            {!! get_field('title') !!}</h1>
        <div class="pl-0 mt-6 md:mt-0 md:pl-[320px] flex flex-row items-center">
            <div class="svg-container pr-4 md:pr-0">
                <svg xmlns="http://www.w3.org/2000/svg" width="5" height="113" viewBox="0 0 5 113">
                    <line id="Line_9" data-name="Line 9" y2="113" transform="translate(2.5)" fill="none"
                        stroke="#f9bb44" stroke-width="5" />
                </svg>
            </div>
            <div class="mt-6 md:pl-[2rem] hero__subtitle text-white mb-8 subtitle">{!! get_field('content') !!}</div>
        </div>
    </div>
</section>
