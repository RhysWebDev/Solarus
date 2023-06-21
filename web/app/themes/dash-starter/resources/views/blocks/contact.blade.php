{{--
  Title: Contact
  Description: Contact block for a contact page
  Category: formatting
  Icon: email
  Keywords: contact form
  Mode: edit
  Align: none
  PostTypes: page
  SupportsAlign: left right
  SupportsMode: false
  SupportsMultiple: false 
  EnqueueStyle: styles/style.scss
  EnqueueScript: scripts/script.js
  EnqueueAssets: path/to/asset
--}}

<section class="container mx-auto my-[5rem]">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        <div class="border-yellow border-t-[24px] border border-w-2 p-4 text-center py-[4rem]">
            <div class="flex items-center mb-2 flex-col">
                <div class="min-h-[79px] w-auto">
                    <img src="{{ get_field('icon_1') }}">
                </div>
                <h4 class="mt-[2rem] text-black text-[20px]">{!! get_field('title_1') !!}</h4>
            </div>
            <div class="text-[30px] text-black"><a href="tel:{!! get_field('description_1') !!}">{!! get_field('description_1') !!}</a></div>
        </div>
        <div class="border-yellow border-t-[24px] border border-w-2 p-4 text-center py-[4rem]">
            <div class="flex items-center mb-2 flex-col">
                <div class="min-h-[79px] w-auto">
                    <img src="{{ get_field('icon_2') }}">
                </div>
                <h4 class="mt-[2rem] text-black text-[20px]">{!! get_field('title_2') !!}</h4>
            </div>
            <div class="text-[30px] text-black"><a href="mailto:{!! get_field('description_2') !!}">{!! get_field('description_2') !!}</a>
            </div>
        </div>
        <div class="border-yellow border-t-[24px] border border-w-2 p-4 text-center py-[4rem]">
            <div class="flex items-center mb-2 flex-col">
                <div class="min-h-[79px] w-auto">
                    <img src="{{ get_field('icon_3') }}">
                </div>
                <h4 class="mt-[2rem] text-black text-[20px]">{!! get_field('title_3') !!}</h4>
            </div>
            <div class="social-icons text-center justify-center flex gap-1">
                @php $facebook = get_field('facebook', 'option') @endphp
                @if ($facebook)
                    <a href="{{ esc_url($facebook) }}" target="_blank" class="social-icon"><i
                            class="fab fa-facebook-f text-primary text-[30px]"></i></a>
                @endif

                @php $instagram = get_field('instagram', 'option') @endphp
                @if ($instagram)
                    <a href="{{ esc_url($instagram) }}" target="_blank" class="social-icon"><i
                            class="fab fa-instagram text-primary text-[30px]"></i></a>
                @endif
            </div>
        </div>
    </div>
</section>
