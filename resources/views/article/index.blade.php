@extends('layouts.app')

@section('content')
    <div class="flex justify-center bg-gray-50 mt-10 py-10">
        <div class="text-center w-1/4 mt-10">
            <h1 class="text-4xl sm:text-3xl w-25 font-semibold">
                Blog
            </h1>
            <hr class="border-b-4 logo-border-color mt-5">
        </div>
    </div>

    <div class="container w-full mx-auto px-4 md:px-12">
        <div class="dropdown inline-block relative px-1 lg:px-4">
            <button class="dropdown-color bg-gray-200 font-semibold py-2 px-4 rounded inline-flex items-center">
                <span class="mr-1">Blog Categories</span>
                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/> </svg>
            </button>
            <ul class="dropdown-menu absolute hidden text-gray-700 pt-1">
                <li class="dropdown-list"><a class="bg-gray-200 rounded-t py-2 px-4 block whitespace-no-wrap" href="/blog">All</a></li>
                <li class="dropdown-list"><a class="bg-gray-200 py-2 px-4 block whitespace-no-wrap" href="/blog/1">Investor Mindset</a></li>
                <li class="dropdown-list"><a class="bg-gray-200 rounded-b py-2 px-4 block whitespace-no-wrap" href="/blog/2">Investor Skill</a></li>
            </ul>
        </div>
        @foreach ($articles as $article)
            <!-- Column -->
            <div class="my-2 px-1 w-full lg:my-4 lg:px-4">

                <!-- Article -->
                <article class="overflow-hidden grid lg:grid-cols-2 p-6 rounded-lg shadow-lg">
                    <a href="/blog/detail/{{$article->id}}">
                        <img alt="" class="block h-full w-full" src="{{URL::to('/') }}/images/{{$article->images}}">
                    </a>
                    <div class="block h-auto w-full">
                        <header class="flex block h-24 sm:h-16 lg:h-24 leading-tight p-2 md:p-4">
                            <a href="/blog/detail/{{$article->id}}">
                                <h1 class="text-lg logo-text-color px-6">
                                    {{$article->title}}
                                </h1>
                            </a>
                        </header>
                        <p class="block h-auto ml-2 md:ml-4 text-sm sm:text-md px-6 leading-normal">
                            By : {{$article->author}}
                        </p>
                        <p class="block h-auto ml-2 md:ml-4 text-sm sm:text-md px-6 leading-normal">
                            {!!$article->date!!}
                        </p>
                        <p class="block text-justify h-auto ml-2 md:ml-4 text-sm sm:text-md px-6 py-2 leading-normal">
                            {{$article->summary}}
                        </p>
                        <footer class="flex items-center justify-between leading-none ml-6 p-2 pb-3 md:p-4">
                            <a href="/blog/detail/{{$article->id}}" class="py-2 text-blue-400 hover:underline">See More</a>
                        </footer>
                    </div>
                </article>
                <!-- END Article -->
            </div>
        @endforeach

        <div class="pb-10">
            {{ $articles->links() }}
        </div>
    </div>
    
@endsection