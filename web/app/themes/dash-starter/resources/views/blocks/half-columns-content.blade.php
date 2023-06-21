{{--
  Title: Half Columns variation 2
  Description: Half columns variation 2, no full width image, padding, title and content
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

<section data-{{ $block['id'] }}
    class="{{ $block['classes'] }} @if (is_front_page()) bg-lightaccent @else bg-pastelYellow @endif ">
    <div class="container mx-auto py-[6rem] pb-[6rem] px-4">
        <div class="flex flex-wrap -mx-4 align-middle items-center">
            <div class="w-full md:w-1/2 pr-[4rem] gradient_padding column column--1 items-center">
                <img src="{{ get_field('column_1_image') }}">
                <h3
                    class="@if (is_front_page()) column__title @endif font-custom-size text-black font-semibold text-xl md:text-[30px] leading-[65px] lg:text-[50px] mb-4">
                    {!! get_field('column_1_title') !!}
                </h3>
            </div>
            <div class="w-full md:w-1/2 px-4 column column--2 items-center">
                <div class="column__content text-black text-sm md:text-base text-[17px] font-light mb-4 items-center">
                    @if (get_field('column_2_title'))
                        <h3
                            class="@if (is_front_page()) column__title @endif font-custom-size text-black font-semibold text-xl md:text-[30px] leading-[65px] lg:text-[50px] mb-0">
                            {!! get_field('column_2_title') !!}
                        </h3>
                    @endif
                    <div class="text-[25px]">
                        {!! get_field('column_2_content') !!}
                    </div>
                    @if (get_field('button_link'))
                        <div class="mt-[4rem]">
                            <a data-modal-target="defaultModal" data-modal-toggle="defaultModal"
                                href="{{ get_field('button_link')['url'] }}"
                                class=" btn--primary btn">{{ get_field('button_link')['title'] }}</a>

                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
