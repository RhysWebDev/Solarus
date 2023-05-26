<footer class="footer pb-[5rem] mt-[5rem]">

    <section class="container mx-auto flex flex-col md:flex-row items-start mb-4">
        <div class="footer-col-start w-full md:w-2/3">
            @if (have_rows('footer_badges', 'option'))
                <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-4">
                    @while (have_rows('footer_badges', 'option'))
                        @php the_row(); @endphp
                        <div class="flex items-center justify-center">
                            <img src="{{ get_sub_field('badge') }}" class="h-auto max-w-full">
                        </div>
                    @endwhile
                </div>
            @endif
            <div class="footer__lower-content pt-[5rem] pr-[17rem]">
                <div class="logo h-[69px] invert-colors content-center align-center text-center mx-auto mb-[5rem]">
                    @php $logo = get_field('footer_logo', 'option') @endphp
                    @if ($logo)
                        <a href="{{ esc_url(home_url()) }}"><img src="{{ esc_url($logo['url']) }}"
                                alt="{{ esc_attr(get_bloginfo('name')) }}"></a>
                    @else
                        <h1><a href="{{ esc_url(home_url()) }}">{{ esc_html(get_bloginfo('name')) }}</a></h1>
                    @endif
                </div>

                <div class="footer__nav pb-[4rem]">
                    @include('partials.navigation')
                </div>

                <hr />

                <div class="footer__under-logo text-white flex flex-row flex-start pt-[5rem] pb-[5rem] gap-x-[3rem]">
                    <div class="footer__contact-info">
                        <p><a href="#">Contact Us </a></p>
                        <p>0161 393 1882 </p>
                        <p>hello@solarus.com</p>
                    </div>

                    <div class="social-icons text-center justify-center flex gap-1">
                        @php $facebook = get_field('facebook', 'option') @endphp
                        @if ($facebook)
                            <a href="{{ esc_url($facebook) }}" target="_blank" class="social-icon"><i
                                    class="fab fa-facebook-f text-primary"></i></a>
                        @endif

                        @php $linkedin = get_field('linkedin', 'option') @endphp
                        @if ($linkedin)
                            <a href="{{ esc_url($linkedin) }}" target="_blank" class="social-icon"><i
                                    class="fab fa-linkedin text-primary"></i></a>
                        @endif

                        @php $instagram = get_field('instagram', 'option') @endphp
                        @if ($instagram)
                            <a href="{{ esc_url($instagram) }}" target="_blank" class="social-icon"><i
                                    class="fab fa-instagram text-primary"></i></a>
                        @endif
                    </div>
                </div>

                <hr />

                <div class="footer__bottom flex flex-row flex-start text-white pt-[5rem] gap-x-[5rem]">
                    <p>Copyright 2023 </p>
                    <a href="#">Cookies </a>
                    <a href="#"> Privacy policy</a>
                </div>

            </div>


        </div>
        <div class="footer-col-end w-full md:w-1/3 bg-white shadow-2xl p-[3rem]">
            <h2 class="text-black text-[50px] font-[500] mb-5">Get in touch </h2>
            {!! do_shortcode('[fluentform id="1"]') !!}
        </div>
    </section>
