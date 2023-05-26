{{--
  Title: Half Columns content
  Description: Half columns
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

<section data-{{ $block['id'] }} class="{{ $block['classes'] }} bg-gray-100 bg-white">
    <div class="container mx-auto py-[6rem] px-4 ">
        <div class="flex flex-wrap -mx-4 align-middle items-center">
            <div class="w-full md:w-1/2 pr-[4rem] gradient_padding column column--1">
                <h3
                    class="column__title text-black font-semibold text-xl md:text-[30px] leading-[65px] lg:text-[50px] mb-4">
                    {!! get_field('column_1_title') !!}</h3>
            </div>
            <div class="w-full md:w-1/2 px-4 column column--2">
                <div class="column__content text-black text-sm md:text-base lg:text-[25px] font-light mb-4">
                    {!! get_field('column_2_content') !!}</div>
            </div>
        </div>
    </div>
</section>
