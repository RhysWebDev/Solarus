<script src="https://kit.fontawesome.com/d6a1746038.js" crossorigin="anonymous"></script>


<header id="header" class="header w-full fixed z-20	px-[2rem]">
    <div class="header__mainbar">
        <div class="container mx-auto flex items-center justify-between">
            <div class="logo h-[80px] md:h-[105px]">
                @php $logo = get_field('logo', 'option') @endphp
                @if ($logo)
                    <a href="{{ esc_url(home_url()) }}"><img class="header__logo" src="{{ esc_url($logo['url']) }}"
                            alt="{{ esc_attr(get_bloginfo('name')) }}"></a>
                @else
                    <h1><a href="{{ esc_url(home_url()) }}">{{ esc_html(get_bloginfo('name')) }}</a></h1>
                @endif
            </div>

            @include('partials.navigation')

            <!-- Hide the buttons on mobile and tablet screens -->
            <div class="hidden md:flex justify-between gap-4">
                @php $button_link = get_field('login_button', 'option') @endphp
                @if ($button_link)
                    <a href="{{ esc_url($button_link['url']) }}" class="btn btn--primary font-bold"
                        data-modal-target="defaultModal"
                        data-modal-toggle="defaultModal">{{ esc_html($button_link['title']) }}</a>
                @endif

            </div>
        </div>
    </div>
</header>
