{{--
  Title: Hero Internal
  Description: Internal page Hero section
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

<section data-{{ $block['id'] }} class="flex items-center hero bg-cover bg-center min-h-[50vh] relative"
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
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div>
                <h1 class="font-medium text-white hero__title-smaller mb-2 mt-[2rem] title-lg">
                    {!! get_field('title') !!}
                </h1>
                <div class="pl-0 mt-6 md:mt-0 flex flex-row items-center">
                    <div class="svg-container pr-4 md:pr-0">
                        <svg xmlns="http://www.w3.org/2000/svg" width="5" height="113" viewBox="0 0 5 113">
                            <line id="Line_9" data-name="Line 9" y2="113" transform="translate(2.5)"
                                fill="none" stroke="#f9bb44" stroke-width="5" />
                        </svg>
                    </div>
                    <div class="mt-6 md:pl-[2rem] hero__subtitle text-white mb-8 subtitle">
                        {!! get_field('content') !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@if (get_field('service_guarantee_title'))
    <section data-{{ $block['id'] }} class="flex items-center hero__form-row bg-cover bg-center min-h-[50vh] relative">
        <div class="container mx-auto px-4 py-12 md:pt-[2rem] md:pb-[8rem] gap-5 relative">
            <h4 class="text-black text-[20px] text-center md:text-left">{{ get_field('service_guarantee_title') }}</h4>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 relative">
                <div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-[3rem] text-center md:text-left">
                        @if (have_rows('service_guarantee'))
                            @while (have_rows('service_guarantee'))
                                @php the_row(); @endphp
                                <div class="col-span-1 md:col-auto">
                                    <img class="hero__icons" src="{{ get_sub_field('icon') }}" alt="Service Icon"
                                        class="w-70 h-70">
                                    <h3 class="mt-5 text-black text-[20px]">{{ get_sub_field('title') }}</h3>
                                    <p class="text-pastel mt-4">{{ get_sub_field('text') }}</p>
                                </div>
                            @endwhile
                        @endif
                    </div>
                </div>
                <div class="relative mt-6 md:mt-0">
                    <div
                        class="max-w-[670px] form_wrap drop-shadow-lg w-full p-4 absolute top-[50%] right-0 w-full md:w-[calc(50% + 3rem)] h-full flex flex-col items-center justify-end z-10 pr-3">
                        <div class="bg-white px-[5rem] py-[3rem]">
                            <h3 class="font-custom-size color_secondary mb-4"> {{ get_field('form_title') }} </h3>
                            <p> {{ get_field('form_content') }} </p>
                            {!! do_shortcode(get_field('form_shortcode')) !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endif
