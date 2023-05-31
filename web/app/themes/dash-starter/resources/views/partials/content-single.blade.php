<article {{ post_class('h-entry') }}>
    <section class="flex items-center hero bg-cover bg-center min-h-[50vh] relative"
        style="background-image: url('{{ get_the_post_thumbnail_url() }}')">
        <div class="container mx-auto px-4 py-12 md:py-32 gap-5 relative">
            <h1 class="font-medium text-white hero__title mb-4 mb-2 title-lg">
                @php the_title() @endphp
            </h1>
            <div class="pl-0 mt-6 md:mt-0 md:pl-[320px] flex flex-row items-center">
                <div class="svg-container pr-4 md:pr-0">
                    <svg xmlns="http://www.w3.org/2000/svg" width="5" height="113" viewBox="0 0 5 113">
                        <line id="Line_9" data-name="Line 9" y2="113" transform="translate(2.5)" fill="none"
                            stroke="#f9bb44" stroke-width="5" />
                    </svg>
                </div>
                <div class="mt-6 md:pl-[2rem] hero__subtitle text-white mb-8 subtitle">
                    {!! get_the_content() !!}
                </div>
            </div>
        </div>
    </section>

    <div class="e-content my-[3rem] container mx-auto">
        @php(the_content())
    </div>

    <footer>
        {!! wp_link_pages([
            'echo' => 0,
            'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'),
            'after' => '</p></nav>',
        ]) !!}
    </footer>

</article>
