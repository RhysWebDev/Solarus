{{--
  Title: Image Blocks
  Description: Image Blocks
  Category: formatting
  Icon: slides
  Keywords: Image Blocks
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


<section>
    <div class="container mx-auto flex flex-col md:flex-row gap-x-4">
        <div class="w-full md:w-1/2 p-4 md:px-[2rem] py-[8rem] bg-cover bg-no-repeat h-100 justify-center flex-col border-yellow border-b-[24px]"
            style="background-image: url({{ get_field('background_image') }});">
            <div class="bg-white p-4 md:p-8 max-w-[300px] flex flex-col flex-start justify-start">
                <h2 class="mb-4 text-black bg-white text-[25px] leading-[30px] font-bold">
                    {{ get_field('column_1_title') }}</h2>
                <div class="text-black text-lg md:text-base">
                    {{ get_field('column_1_text') }}
                </div>
            </div>
        </div>
        <div class="w-full md:w-1/2 p-4 md:px-[2rem] py-[8rem] bg-cover bg-no-repeat h-100 justify-center flex-col border-yellow border-b-[24px]"
            style="background-image: url({{ get_field('background_image_2') }});">
            <div class="bg-white p-4 md:p-8 max-w-[300px] flex flex-col flex-start justify-start">
                <h2 class="mb-4 text-black bg-white text-[25px] leading-[30px] font-bold">
                    {{ get_field('column_2_title') }}</h2>
                <div class="text-black text-lg md:text-base">
                    {{ get_field('column_2_text') }}
                </div>
            </div>
        </div>
    </div>
</section>
