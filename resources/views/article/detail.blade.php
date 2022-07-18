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
            <!-- Column -->
            <div class="my-2 px-1 w-full lg:my-4 lg:px-4">

                <!-- Article -->
                <article class="overflow-hidden rounded-lg shadow-lg">
                    <img alt="" class="flex h-1/2 w-1/2 m-auto mt-2" src="{{URL::to('/') }}/images/{{$articles->images}}">
                    <div class="block h-auto w-full">
                        <header class="block h-auto leading-normal text-center p-2 md:p-4">
                            <h1 class="text-lg sm:text-xl logo-text-color px-6">
                                {{$articles->title}}
                            </h1>
                        </header>
                        <div class="block h-auto ml-2 md:ml-4 mr-2 md:mr-4 text-sm sm:text-md px-6 justify-center text-justify leading-relaxed">
                            {!!$articles->body!!}
                        </div>
                        <p class="block h-auto ml-2 md:ml-4 text-md sm:text-lg px-6 pt-6 text-left leading-normal">
                            By : {{$articles->author}}
                        </p>
                        <p class="block h-auto ml-2 md:ml-4 text-md sm:text-lg px-6 pb-6 text-left leading-normal">
                            {!!$articles->date!!}
                        </p>
                    </div>
                </article>
                <!-- END Article -->
            </div>
    </div>

    @if($articles->comments->count() > 0)
    <div class="container h-60 overflow-y-scroll w-full mx-auto px-8 md:px-16 rounded-lg">
        @foreach ($articles->comments as $comment)
        <div class="container w-full m-auto py-4 px-8 md:px-16 rounded-lg">
            <h1 class="block h-auto text-sm sm:text-md px-6 font-semibold leading-normal">
                {{$comment->name}} <span class="text-gray-600 text-sm font-normal"> - {{$comment->created_at->diffForHumans()}} </span>
            </h1>
            <p class="block h-auto text-sm sm:text-md px-6 leading-normal">
                {{$comment->comment}}
            </p>
            <hr class="border-b-1 mt-5">
        </div>
        @endforeach
    </div>
    @endif

    <div class="container w-full mx-auto px-8 md:px-16 rounded-lg">
        <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" method="POST" action="{{route('comments.store', $articles->id)}}">
            @csrf
            <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                Nama
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="name" id="name" type="text" placeholder="Nama">
            </div>
            <div class="mb-6">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="comment">
                Comment
            </label>
            <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" name="comment" id="comment"></textarea>
            </div>
            <div class="flex items-center justify-between">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                Post Comment
            </button>
            </div>
        </form>
    </div>
@endsection