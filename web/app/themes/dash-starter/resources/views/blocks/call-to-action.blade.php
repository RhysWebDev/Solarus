{{--
  Title: Call to Action
  Description: Display a call to action with boxes
  Category: custom-blocks
  Icon: admin-comments
  Keywords: call to action cta
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

<section class="call-to-action-block container mx-auto py-[6rem]] md:py-[6rem] call-to-action-block--main">
    <div class="text-center">
        <h2 class="call-to-action-block__title max-w-[820px] mx-auto text-black">{{ get_field('main_title') }}</h2>
        <p class="call-to-action-block__intro">{{ get_field('subtitle') }}</p>
        <a href="{{ get_field('button_url') }}"
            class="btn btn--primary call-to-action-block__button mb-[5rem]">{{ get_field('button_text') }}</a>
        <div
            class="boxes-wrapper mt-[5rem] grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-x-4 md:gap-x-8 gap-y-4 call-to-action-block__boxes-wrapper">
            @if (have_rows('boxes'))
                @while (have_rows('boxes'))
                    @php the_row(); @endphp
                    <div
                        class="box py-[2.5rem] px-[6rem] bg-lightaccent flex items-center justify-center call-to-action-block__box">
                        <div class="text-center">
                            <span
                                class="box-number text-xl call-to-action-block__box-number">{{ get_sub_field('number') }}</span>
                            <h3 class="box-title text-lg font-bold mt-2 call-to-action-block__box-title">
                                {{ get_sub_field('title') }}</h3>
                            <p class="box-content mt-2 call-to-action-block__box-content">{{ get_sub_field('content') }}
                            </p>
                        </div>
                    </div>
                @endwhile
            @endif
        </div>
    </div>
</section>
