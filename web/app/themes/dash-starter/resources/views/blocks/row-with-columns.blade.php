{{--
  Title: Row with Columns
  Description: Display a row with multiple columns
  Category: custom-blocks
  Icon: admin-comments
  Keywords: row columns
  Mode: edit
  Align: none
  PostTypes: page post
  SupportsAlign: none
  SupportsMode: true
  SupportsMultiple: false
  EnqueueStyle: styles/style.scss
  EnqueueScript: scripts/script.js
  EnqueueAssets: path/to/asset
--}}


<section class="row-with-columns-block bg-gradient py-[6rem] row-with-columns-block--main">
    <div class="container mx-auto">
        <h2 class="row-with-columns-block__title text-[40px] text-white text-center">
            {{ get_field('main_title') }}</h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-[6rem] mt-[3rem] text-center">
            @if (have_rows('columns'))
                @while (have_rows('columns'))
                    @php the_row(); @endphp
                    <div class="px-4">
                        <div class="column-content">
                            <div class="column-icon text-3xl mb-2">
                                <img class="block mx-auto" src="{{ get_sub_field('icon') }}">
                            </div>
                            <h3 class="column-subtitle text-center text-white text-lg mb-2 text-[20px]">
                                {{ get_sub_field('subtitle') }}
                            </h3>
                            <p class="column-content-text text-center text-white">{{ get_sub_field('content') }}</p>
                        </div>
                    </div>
                @endwhile
            @endif
        </div>
    </div>
</section>
