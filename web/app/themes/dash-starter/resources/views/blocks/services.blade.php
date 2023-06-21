{{--
  Title: Service grids
  Description: Service grids
  Category: formatting
  Icon: slides
  Keywords: Service grids
  Mode: edit
  Align: none
  PostTypes: page post
  SupportsAlign: left right
  SupportsMode: false
  SupportsMultiple: false
  EnqueueStyle: styles/style.scss
  EnqueueScript: scripts/script.js
  EnqueueAssets: path/to/asset
--}}


<section class="py-8 md:py-12">
    <div class="container mx-auto">
        <h2 class="text-center mt-8 mb-8 md:mb-12 max-w-[700px] mx-auto font-custom-size text-black">
            {{ get_field('services_title') }}
        </h2>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 md:gap-8">
            @if (have_rows('services'))
                @while (have_rows('services'))
                    @php
                        the_row();
                        $service_image = get_sub_field('service_image');
                        $service_title = get_sub_field('service_title');
                        $service_content = get_sub_field('service_content');
                        $service_button_text = get_sub_field('service_button_text');
                        $service_button_link = get_sub_field('service_button_link');
                    @endphp

                    <div class="border-yellow border-t-[24px] shadow-lg rounded-lg overflow-hidden">
                        <div class="relative">
                            <img src="{{ $service_image }}" alt="{{ $service_title }}" class="w-full h-auto">
                        </div>
                        <div class="p-[4rem] md:p-[4rem]">
                            <div class="text-left">
                                <h3 class="text-xl md:text-[30px] mb-2 md:mb-5 text-black leading-[40px]">
                                    {{ $service_title }}</h3>
                            </div>
                            <div class="text-base text-black pb-2 md:pb-5 mb-[3rem] md:mb-[3rem]">
                                {!! $service_content !!}
                            </div>
                            @if ($service_button_link)
                                <a data-modal-target="defaultModal" data-modal-toggle="defaultModal"
                                    href="{{ $service_button_link['url'] }}"
                                    class="mt-5 md:mt-5 btn btn--primary">{{ $service_button_text }}</a>
                            @endif
                        </div>
                    </div>
                @endwhile
            @endif
        </div>
    </div>
</section>
