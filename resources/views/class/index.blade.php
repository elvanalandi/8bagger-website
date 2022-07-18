@extends('layouts.app')

@section('content')
    <div class="flex justify-center bg-gray-50 mt-10 py-10">
        <div class="text-center w-1/4 mt-10">
            <h1 class="text-4xl sm:text-3xl w-25 font-semibold">
                Our Class
            </h1>
            <hr class="border-b-4 logo-border-color mt-5">
        </div>
    </div>

    <div class="container grid lg:grid-cols-3 w-full mx-auto px-4 md:px-12">
        @foreach ($classes as $class)
            <!-- Column -->
            
                <div class="my-2 px-1 w-full lg:my-4 lg:px-4">

                    <a href="/class#{{$class->id}}">
                        <!-- Article -->
                        <article class="overflow-hidden p-6 rounded-lg shadow-xl" id="parent-class">
                            
                            <img alt="" class="block h-24 w-64 m-auto" src="{{URL::to('/') }}/images/{{$class->images}}">
                            
                            <div class="block h-auto w-full">
                                <header class="block text-center h-16 sm:h-20 leading-tight p-2 md:p-4">
                                    <h1 class="text-lg font-semibold px-6">
                                        {{$class->title}}
                                    </h1>
                                </header>
                                <p class="block text-center logo-text-color h-20 text-sm sm:text-md px-6 py-4 leading-normal">
                                    {{$class->description}}
                                </p>
                            </div>
                        </article>
                        <!-- END Article -->
                    </a>
                </div>
        @endforeach
    </div>

    <div class="flex justify-center bg-gray-50 mt-10">
        <div class="text-center w-1/4 mt-10">
            <h1 class="text-4xl sm:text-3xl w-25 font-semibold">
                Detail Class
            </h1>
            <hr class="border-b-4 logo-border-color mt-5">
        </div>
    </div>
    @foreach ($classes as $class)
        @if ($class->id % 2 == 1)
        <div class="odd-color w-full mx-auto px-4 md:px-12">
            <!-- Column -->
            <div class="px-1 w-full lg:mt-4 lg:py-4 lg:px-4" id="{{$class->id}}">
                <!-- Article -->
                <article class="overflow-hidden items-center p-6">
                    <img alt="" class="h-32 w-60 m-auto" src="{{URL::to('/') }}/images/{{$class->images}}">

                    <div class="h-auto w-full">
                        <header class="text-center h-12 leading-tight p-2 md:p-4">
                            <h1 class="text-lg logo-text-color font-semibold px-6">
                                {{$class->title}}
                            </h1>
                        </header>
                        <p class="text-center h-12 text-sm sm:text-md px-6 leading-normal">
                            {{$class->description}}
                        </p>
                        <div class="h-auto ml-2 md:ml-4 text-sm sm:text-md px-10 leading-relaxed">
                            {!!$class->body!!}
                        </div>
                    </div>
                </article>
                <!-- END Article -->
            </div>
        </div>
        @else
        <div class="w-full mx-auto px-4 md:px-12">
            <div class="py-2 px-1 w-full lg:my-4 lg:px-4" id="{{$class->id}}">
                <!-- Article -->
                <article class="overflow-hidden items-center p-6">
                    <img alt="" class="h-32 w-60 m-auto" src="{{URL::to('/') }}/images/{{$class->images}}">

                    <div class="h-auto w-full">
                        <header class="text-center h-12 leading-tight p-2 md:p-4">
                            <h1 class="text-lg logo-text-color font-semibold px-6">
                                {{$class->title}}
                            </h1>
                        </header>
                        <p class="text-center h-12 text-sm sm:text-md px-6 leading-normal">
                            {{$class->description}}
                        </p>
                        <div class="h-auto ml-2 md:ml-4 text-sm sm:text-md px-10 py-6 leading-relaxed">
                            {!!$class->body!!}
                        </div>
                    </div>
                </article>
                <!-- END Article -->
            </div>
        </div>
        @endif
    @endforeach

    <div class="fixed z-30 bottom-0 right-0 mr-6 mb-6 opacity-0" id="back2Top">
        <a href="#" class="block arrow-background bg-opacity-50 rounded-xl">
            <span class="hidden">Back to Top</span>
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 24 24" class="text-gray-50 h-10 w-10">
                <path fill="currentColor" d="M7.41,15.41L12,10.83L16.59,15.41L18,14L12,8L6,14L7.41,15.41Z" />
            </svg>
        </a>
    </div>
@endsection

@push('scripts')
    <script>
        back2Top.addEventListener('click', (e) => {
            e.preventDefault();
            window.scroll({top: 0, left: 0, behavior: 'smooth' });
        });

        $(window).scroll(function() {
            if ($(this).scrollTop() > 0) {
                $("#back2Top").removeClass("opacity-0");
            } else {
                $('#back2Top').addClass("opacity-0"); 
            }
        });

    </script>
@endpush
