{{-- 
  Title: Featured Block
  Description: Featured Block
  Category: formatting
  Icon: admin-comments
  Keywords: Featured Block
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

<section>
    <div class="container mx-auto my-[5rem]">
        <div class="flex flex-wrap">
            <div class="w-full md:w-1/3">
                <img src="{{ get_field('featured_image') }}" alt="Featured Image" class="w-full object-cover h-full">
            </div>
            <div class="w-full md:w-2/3 bg-primary flex items-center py-[3rem] md:py-[2rem]">
                <div class="px-[4rem] md:px-[8rem]">
                    <h2 class="font-bold text-white font-custom-size mb-[3rem]">
                        {{ get_field('featured_title') }}</h2>
                    <p class="text-lg text-white">{{ get_field('featured_content') }}</p>
                </div>
            </div>
        </div>
    </div>
</section>
