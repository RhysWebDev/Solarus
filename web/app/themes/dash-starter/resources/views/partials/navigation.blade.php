@php
    use Log1x\Navi\Navi;
    $navigation = (new Navi())->build('primary_navigation');
@endphp

<nav class="nav-primary flex md:gap-x-5 2xl:gap-x-10 items-center im-simple relative desktop-nav">
    @if ($navigation->isNotEmpty())


        @foreach ($navigation->toArray() as $item)
            <div
                class="nav-link px-4 text-white relative {{ $item->classes }} @if ($item->children) parent @endif {{ $item->active ? 'current-item' : '' }} ">
                <a @if ($item->children) href="javascript:void(0)" @else href="{{ $item->url }} @endif">
                    {{ $item->label }}
                </a>
                @if ($item->children)
                    <div
                        class="submenu submenu_lvl_1 pl-8 2lg:pl-6 h-auto 2lg:absolute 2lg:bg-primary-dark 2lg:text-white w-max z-40 2lg:shadow-xl p-4 2lg:p-6 overflow-visible">
                        <div class="flex flex-col gap-y-4 im-simple">
                            @foreach ($item->children as $child)
                                <div
                                    class="nav-link im-base {{ $child->classes }} @if ($item->children) has-submenu parent @endif {{ $child->active ? 'current-item' : '' }}">
                                    <a href="{{ $child->url }}">
                                        {!! $child->label !!}
                                    </a>
                                    @if ($child->children)
                                        <div
                                            class="submenu submenu_lvl_2 im-simple absolute left-[100%] w-max ml-1 2lg:bg-primary-dark p-8 block">
                                            <div class="flex flex-col gap-y-4 im-simple ">
                                                @foreach ($child->children as $child)
                                                    <li style="list-style: none;"
                                                        class="2lg:text-white im-base mb-4 last:mb-0  {{ $child->classes }}  {{ $child->active ? 'current-item' : '' }}">
                                                        <a href="{{ $child->url }}">
                                                            {{ $child->label }}
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif
            </div>
        @endforeach
    @endif
</nav>


<div class="nav-toggle">
    <span class="nav-toggle-icon"><i class="fas fa-bars"></i></span>
</div>

<div class="nav-overlay mobile-nav ">
    <div class="nav-overlay-content h-100 justify-center">
        <div class="nav-toggle-close">
            <span class="nav-toggle-icon"><i class="fas fa-times"></i></span>
        </div>
        <nav
            class="nav-primary flex flex-col align-center flex-center justify-center md:gap-x-5 2xl:gap-x-10 items-center im-simple relative gap-y-4 ">
            @if ($navigation->isNotEmpty())


                @foreach ($navigation->toArray() as $item)
                    <div
                        class="nav-link px-4 text-white relative {{ $item->classes }} @if ($item->children) parent @endif {{ $item->active ? 'current-item' : '' }} ">
                        <a href="{{ $item->url }}">
                            {!! $item->label !!}
                        </a>
                        @if ($item->children)
                            <div
                                class="submenu submenu_lvl_1 pl-8 2lg:pl-6 h-auto 2lg:absolute 2lg:bg-primary-dark 2lg:text-white w-max z-40 2lg:shadow-xl p-4 2lg:p-6 overflow-visible">
                                <div class="flex flex-col gap-y-4 im-simple">
                                    @foreach ($item->children as $child)
                                        <div
                                            class="nav-link im-base {{ $child->classes }} @if ($item->children) has-submenu parent @endif {{ $child->active ? 'current-item' : '' }}">
                                            <a href="{{ $child->url }}">
                                                {{ $child->label }}
                                            </a>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endif
                    </div>
                @endforeach
            @endif
        </nav>
    </div>
</div>
