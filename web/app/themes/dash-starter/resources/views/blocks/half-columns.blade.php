{{--
  Title: Half Columns
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

<section class="half-column__section bg-cover bg-center"
    style="@if (get_field('flip_columns') === false) background:transparent @else background-image: url({{ get_field('background_image') }}); @endif">
    <div class="half-column__content align-middle">
        <div
            class="flex flex-wrap @if (get_field('background_color') === true) bg-gradient @else bg-accent @endif @if (get_field('flip_columns') === false) flex-row-reverse @endif items-center">
            <div class="half-column__image-container w-full md:w-1/2">
                <img src="{{ get_field('image') }}" alt="" class="w-full">
            </div>
            <div class="half-column__text-container p-6 md:p-[8rem] md:py-[4rem] w-full md:w-1/2 mt-6 md:mt-0">
                <h2
                    class="@if (is_front_page()) half-column__title @endif half-column__title-internal mb-4 @if (get_field('flip_columns') === false && get_field('background_color') === false) ) text-black @else text-white @endif">
                    {!! get_field('title') !!}</h2>
                <div
                    class="half-column__content @if (get_field('flip_columns') === false && get_field('background_color') === false) ) text-black @else text-white @endif">
                    {!! get_field('content') !!}</div>

                <div class="half-column__repeater-boxes-wrap">
                    @if (have_rows('repeater_boxes'))
                        <div class="mt-4 mb-2 grid grid-cols-1 md:grid-cols-3 ">
                            @while (have_rows('repeater_boxes'))
                                @php the_row(); @endphp

                                <div class="half-column__box-container w-full sm:w-1/2 md:w-full p-2">
                                    <div
                                        class="half-column__box border border-2	@if (get_field('flip_columns') === false) border-primary @else border-white @endif rounded-lg p-5 flex flex-col justify-center items-center">
                                        <div class="w-full flex justify-center items-center mb-2">
                                            <img src="{{ get_sub_field('image') }}" class="w-16 h-16 object-contain"
                                                alt="">
                                        </div>
                                        <h3
                                            class="half-column__box-title text-center @if (get_field('flip_columns') === false) text-black @else text-white @endif">
                                            {{ get_sub_field('title') }}
                                        </h3>
                                    </div>
                                </div>
                            @endwhile
                        </div>
                    @endif

                    <div class="half-column__before-button mb-[4rem] mt-[2rem] text-white">
                        @if (get_field('before_button_text'))
                            {!! get_field('before_button_text') !!}
                        @endif
                    </div>
                    <div class="half-column__buttonwrap mt-4">
                        @if (get_field('button'))
                            <a data-modal-target="defaultModal" data-modal-toggle="defaultModal"
                                href="{{ get_field('button')['url'] }}"
                                class="half-column__button btn--primary btn rounded">{{ get_field('button')['title'] }}</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
