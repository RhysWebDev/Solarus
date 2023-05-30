{{--
  Title: Half Columns Grid
  Description: Half columns 
  Category: formatting
  Icon: columns
  Keywords: hero
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

<section class="py-12 px-4">
    <div class="container mx-auto">
        <div class="flex flex-wrap -mx-4 align-middle items-center">
            <div class="w-full md:w-1/2 p-[2rem] py-[12rem] bg-cover bg-no-repeat h-100"
                style="background-image: url({{ get_field('background_image') }});">
                <div class="bg-white p-[2rem] max-w-[300px] flex flex-col flex-start justify-start">
                    <h2 class="mb-4 text-black bg-white text-[25px] leading-[32px] font-bold">
                        {{ get_field('column_1_title') }}</h2>
                    @php $button = get_field('button'); @endphp
                    <a href="{{ $button['url'] }}" class="btn btn--primary  mt-[5rem]">{{ $button['title'] }}</a>
                </div>
            </div>
            <div class="w-full md:w-1/2 px-4 lg:pl-[5rem]">
                <div class="grid half-columns-grid__grid-wrap grid-rows-2 grid-cols-2 gap-4">
                    @if (have_rows('column_2_cards'))
                        @while (have_rows('column_2_cards'))
                            @php(the_row())
                            <div class="bg-white rounded-lg p-4">
                                <img class="mb-4" src="{{ get_sub_field('icon')['url'] }}"
                                    alt="{{ get_sub_field('icon')['alt'] }}">
                                <h6 class="mt-3 mb-2 text-[20px] text-black">{{ get_sub_field('small_title') }}</h6>
                                <p class="font-normal mb-4 text-[16px] text-pastel">{!! get_sub_field('paragraph') !!}</p>
                            </div>
                        @endwhile
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
