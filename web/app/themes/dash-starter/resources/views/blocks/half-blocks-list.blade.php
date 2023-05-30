{{--
  Title: Half Columns List
  Description: Half columns  List
  Category: formatting
  Icon: columns
  Keywords: half columns
  Mode: edit
  Align: none
  PostTypes: page post
  SupportsAlign: left right
  SupportsMode: true
  SupportsMultiple: true 
  EnqueueStyle: styles/style.scss
  EnqueueScript: scripts/script.js
  EnqueueAssets: path/to/asset
--}}

@php
    $serviceButtonLink = get_field('service_button_link');
@endphp
<section class="container mx-auto">
    <div class="flex flex-col md:flex-row">
        <div class="w-full md:w-1/2">
            <div class="shadow-lg rounded-lg overflow-hidden">
                <div class="relative">
                    <img src="{{ get_field('column_image') }}" class="w-full h-auto">
                </div>
                <div class="p-8 md:p-16">
                    <div class="text-left">
                        <h3 class="text-2xl md:text-3xl mb-4 md:mb-5 text-black leading-[40px]">
                            {{ get_field('service_title') }}</h3>
                    </div>
                    <div class="text-base text-black pb-2 md:pb-5 mb-6 md:mb-6">
                        {!! get_field('service_content') !!}
                    </div>
                    <a href="{{ $serviceButtonLink['url'] }}" class="mt-4 md:mt-5 btn btn--primary">
                        {{ $serviceButtonLink['title'] }}
                    </a>
                </div>
            </div>
        </div>

        <div class="w-full md:w-1/2 bg-secondary p-6 md:p-[3rem] flex flex-col justify-center">
            <h2 class="font-custom-size text-white mb-4 md:mb-[3rem]">{{ get_field('title') }}</h2>

            {{-- If has rows, get row --}}
            @if (have_rows('icon_list'))
                @while (have_rows('icon_list'))
                    @php(the_row())
                    <div class="flex mb-4 md:mb-[3rem]">
                        {{-- Icon left column taking up 1/4 space --}}
                        <div class="w-1/4">
                            <div class="text-3xl md:text-4xl">
                                <img src="{{ get_sub_field('icon') }}" alt="Icon">
                            </div>
                        </div>

                        {{-- Subtitle and content stacked in a column taking up remainder of the space --}}
                        <div class="w-3/4">
                            <h4 class="text-lg md:text-[20px] text-white mb-2">{{ get_sub_field('subtitle') }}</h4>
                            <div class="text-white text-base md:text-[16px]">{!! get_sub_field('content') !!}</div>
                        </div>
                    </div>
                @endwhile
            @endif
        </div>
    </div>
</section>
