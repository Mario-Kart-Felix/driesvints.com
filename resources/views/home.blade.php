@extends('layouts.base', [
    'metaDescription' => 'I\'m a software engineer from Antwerp, Belgium, work for Laravel, organise events for Full Stack Belgium and organise the Full Stack Europe conference.',
])

@section('body')
    @component('layouts.header')
        <div class="text-center">
            <h1 class="text-5xl font-bold mb-6">
                Hi, I'm Dries
            </h1>

            <p class="text-2xl sm:text-3xl leading-snug mb-8">
                Software engineer at <a href="https://laravel.com">Laravel</a>, <a href="https://fullstackbelgium.be">event</a> & <a href="https://fullstackeurope.com">conference</a> organiser, <a href="https://github.com/driesvints">open-source</a> maintainer, <a href="https://www.youtube.com/watch?v=2yos8WUG5z4">speaker</a>, and <a href="{{ route('blog') }}">blogger</a>.
            </p>

            <p class="mb-8">
                <a href="{{ route('home') }}#about">
                    More about me &rightarrow;
                </a>
            </p>

            <p class="text-xs">
                Photo by <a href="https://ninjaparade.ca">ninjaparade</a>
            </p>
        </div>
    @endcomponent

    <div id="content">
        <div class="max-w-3xl mx-auto px-6 py-10 sm:py-20">
            <h2 class="text-4xl text-center sm:text-left font-bold mb-4 sm:mb-12">Latest Posts</h2>

            <p class="text-base text-center font-bold sm:float-right sm:-mt-20 mb-8">
                <a href="{{ route('blog') }}">View all &rightarrow;</a>
            </p>

            @foreach ($posts as $post)
                <span class="block text-xs uppercase text-gray-600">
                    {{ $post->published_at->format('F j, Y') }}
                </span>
                <p class="text-2xl mb-8">
                    <a href="{{ route('post', $post) }}">{{ $post->title }}</a>
                </p>
            @endforeach
        </div>

        <div id="projects" class="bg-gray-200">
            <div class="max-w-6xl mx-auto px-6 py-10 sm:py-20">
                <h2 class="text-4xl text-center font-bold mb-10">Projects</h2>

                <div class="md:flex mb-12 md:mb-16">
                    <div class="project sm:flex-1 px-4 lg:px-8 mb-8 md:mb-0">
                        <a href="https://fullstackeurope.com" target="_blank" rel="noopener">
                            <div class="bg-white enlarge text-center text-base rounded-lg border-t-6 border-primary shadow-lg h-full px-8 md:px-12 py-8">
                                <div class="h-24 pt-5 mb-6">
                                    <img src="{{ asset('/images/fseu.png') }}" class="inline-block max-h-full" alt="">
                                </div>
                                <p class="mb-6">A conference for every kind of developer</p>
                                <p class="text-sm text-gray-600">fullstackeurope.com <i class="fas fa-external-link-alt"></i></p>
                            </div>
                        </a>
                    </div>
                    <div class="project md:flex-1 px-4 lg:px-8 mb-8 md:mb-0">
                        <a href="https://fullstackbelgium.be" target="_blank" rel="noopener">
                            <div class="bg-white enlarge text-center text-base rounded-lg border-t-6 border-primary shadow-lg h-full px-8 md:px-12 py-8">
                                <div class="h-24 mb-6">
                                    <img src="{{ asset('/images/fsbe.png') }}" class="inline-block max-h-full" alt="">
                                </div>
                                <p class="mb-6">Events in Belgium for web developers</p>
                                <p class="text-sm text-gray-600">fullstackbelgium.be <i class="fas fa-external-link-alt"></i></p>
                            </div>
                        </a>
                    </div>
                    <div class="project md:flex-1 px-4 lg:px-8">
                        <a href="https://laravel.io" target="_blank" rel="noopener">
                            <div class="bg-white enlarge text-center text-base rounded-lg border-t-6 border-primary shadow-lg h-full px-8 md:px-12 py-8">
                                <div class="h-24 pt-8 mb-6">
                                    <img src="{{ asset('/images/laravelio.png') }}" class="inline-block max-h-full" style="max-width: 80%" alt="">
                                </div>
                                <p class="mb-6">The Laravel community platform</p>
                                <p class="text-sm text-gray-600">laravel.io <i class="fas fa-external-link-alt"></i></p>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="text-center">
                    <p class="text-sm sm:text-base text-gray-700 mb-12">
                        + <a href="https://eventy.io">Eventy</a>, a new way to organise events.<br>
                        + <a href="https://github.com/driesvints/dotfiles">Dotfiles</a>, my preferred way to set up my Mac.<br>
                        + <a href="https://github.com/EventSaucePHP/LaravelEventSauce">Laravel EventSauce</a>, event sourcing for Laravel apps.<br>
                        + <a href="https://github.com/blade-ui-kit/blade-icons">Blade Icons</a>, easily use SVG icons in your Laravel Blade views.
                    </p>

                    @include('partials.sponsoring')
                </div>
            </div>
        </div>
    </div>

    @include('partials.about')
@endsection
