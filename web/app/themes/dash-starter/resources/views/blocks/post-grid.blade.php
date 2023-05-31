{{--
  Title: Post Grid
  Description: Displays WordPress posts in a grid layout
  Category: custom-blocks
  Icon: admin-post
  Keywords: posts grid
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

@php
    if (is_front_page()) {
        $posts = get_posts([
            'post_type' => 'post',
            'posts_per_page' => 4,
        ]);
    } else {
        $posts = get_posts([
            'post_type' => 'post',
            'posts_per_page' => -1,
        ]);
    }
    
@endphp
<section class="post-grid-block py-[6rem] pb-[4rem] container mx-auto">
    <div class="flex flex-col items-center mb-8 md:flex-row md:justify-between">
        <h2 class="post-grid-block__title text-black text-[40px] font-bold">News</h2>
        @if (is_front_page())
            <a href="https://solarus.dashdev.uk/news/" class="btn btn--primary">Read all news</a>
        @endif
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4 justify-center md:justify-start">
        @if ($posts)
            @foreach ($posts as $post)
                @php setup_postdata($post); @endphp
                <div class="post-item mt-[3rem] flex flex-col p-4 md:p-0">
                    <a href="{{ get_permalink() }}" class="post-image-link pb-[2rem]">
                        {!! get_the_post_thumbnail($post->ID, 'full', ['class' => 'w-full']) !!}
                    </a>
                    <div class="post-meta">
                        <span class="post-date">{{ get_the_date() }}</span>
                    </div>
                    <h3 class="post-title">
                        <a href="{{ get_permalink($post->ID) }}">{{ get_the_title($post->ID) }}</a>
                    </h3>
                    <p class="py-4 post-excerpt">{{ wp_trim_words(get_the_content(), 20) }}</p>

                    <a href="{{ get_permalink() }}" class="read-more">Read More</a>

                </div>
            @endforeach
            @php wp_reset_postdata(); @endphp
        @endif
    </div>
</section>
