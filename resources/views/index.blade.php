@extends('layouts.app')

@section('content')
    <div class="background-image grid grid-cols-1 m-auto title">
        <div class="m-auto w-4/5 mt-2 sm:py-20">
            <h1 class="w-full text-3xl md:text-5xl lg:text-5xl font-extrabold pt-16 sm:pt-24 pb-1" >AKADEMI
                <span class="font-extrabold logo-text-color">
                    SAHAM
                </span>
            </h1>
            <h1 class="sm:w-full md:w-1/2 lg:w-1/2 text-3xl md:text-5xl lg:text-5xl font-extrabold" >
                FUNDAMENTAL
            </h1>
            <p class="text-justify sm:w-full md:w-4/6 lg:w-4/6 leading-loose pb-5 pt-5 sm:pb-10 sm:pt-10 text-2xl" >
                Memaksimalkan <span class="logo-text-color"><i>Potensi</i></span> dan <span class="logo-text-color"><i>Kualitas
                </i></span> Investasi Investor Ritel.
            </p>
        </div>
    </div>

    <div class="slider-landing">
            @foreach ($articles as $article)
            <div class="m-auto relative">
                <a href="blog/detail/{{$article->id}}">
                <img alt="" class="w-screen pb-4" src="{{URL::to('/') }}/images/{{$article->images_slider}}">
                @if($article->title == "BE VERY GOOD AT SAYING NO")
                    <h1 class="w-4/5 landing-text-size font-extrabold text-gray-50 item-content text-center mx-auto">
                            Be Very Good at
                            <br>
                        <span class="font-extrabold logo-text-color">
                            Saying No.
                        </span>
                    </h1>
                @elseif($article->title == "PER (Price Earning Ratio)")
                    <h1 class="w-4/5 landing-text-size font-extrabold text-gray-50 item-content text-center mx-auto">
                            PER
                        <span class="font-extrabold logo-text-color">
                            (Price Earning Ratio)
                        </span>
                    </h1>
                @elseif($article->title == "Semua Orang Sukses Adalah Penjudi (yang baik)")
                    <h1 class="w-4/5 landing-text-size font-extrabold text-gray-50 item-content text-center mx-auto">
                            Semua Orang Sukses Adalah
                        <span class="font-extrabold logo-text-color">
                            Penjudi (yang baik)
                        </span>
                    </h1>
                @elseif($article->title == "80% KEBERHASILAN INVESTASI SAHAM KITA DITENTUKAN SAAT KITA MENEMUKAN HAL INI")
                    <h1 class="w-4/5 landing-text-size font-extrabold text-gray-50 item-content text-center mx-auto">
                            80% KEBERHASILAN INVESTASI SAHAM KITA DITENTUKAN
                        <span class="font-extrabold logo-text-color">
                            SAAT KITA MENEMUKAN HAL INI
                        </span>
                    </h1>
                @endif
                </a>
                <!-- <div class="prev z-40 flex w-1/4 float-left h-screen justify-self-start">
                    <i class="fas fa-arrow-left"></i>
                </div>
                <div class="next z-40 flex w-1/4 float-right h-screen justify-self-end">
                    <i class="fas fa-arrow-right"></i>
                </div> -->
            </div>
            @endforeach
    </div>

    <div class="flex justify-center bg-gray-50 mt-10 py-10" >
        <div class="text-center w-1/4 mt-10">
            <h1 class="text-4xl sm:text-3xl w-25 font-semibold">
                Blog
            </h1>
            <hr class="border-b-4 logo-border-color mt-5">
        </div>
    </div>

    <div class="container mx-auto px-4 md:px-12">
        <div class="flex flex-wrap -mx-1 lg:-mx-4" >
            @foreach ($articles as $article)
            <!-- Column -->
            <div class="my-2 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">

                <!-- Article -->
                <article class="overflow-hidden rounded-lg shadow-lg">
                    <img alt="" class="block h-auto w-full pb-4" src="{{URL::to('/') }}/images/{{$article->images}}">

                    <header class="flex items-center block h-12 justify-between leading-tight p-2 md:p-4 my-4">
                        <h1 class="text-lg logo-text-color px-6">
                            {{$article->title}}
                        </h1>
                    </header>
                    <p class="block h-auto ml-2 md:ml-4 text-sm sm:text-md xs:text-xs text-justify px-6 py-2 leading-normal">
                        {{$article->summary}}
                    </p>
                    <footer class="block items-center justify-between leading-none ml-6 p-2 pb-3 md:p-4">
                        <button type="button" class="bg-blue-700 p-2 rounded-lg">
                        <a href="blog/detail/{{$article->id}}" class="px-2 py-2 text-gray-50">See More</a>
                        </button>
                    </footer>

                </article>
                <!-- END Article -->
            </div>
            @endforeach
        </div>
    </div>

    <div class="flex justify-center bg-gray-50 mt-10 py-10" >
        <div class="text-center w-1/4 mt-10">
            <h1 class="text-2xl sm:text-4xl w-25 font-semibold">
                Benefit
            </h1>
            <hr class="border-b-4 logo-border-color mt-5">
        </div>
    </div>
    
    <h1 class="text-center text-xl sm:text-2xl font-semibold leading-normal p-4" > 
        Menjadi Value Investor yang Baik Tidaklah Mudah.
    </h1>
    
    <h2 class="text-center text-xl sm:text-2xl leading-normal py-4 px-10 sm:px-40" >
        Nyatanya, hanya 10% dari total seluruh Investor di pasar modal yang mendapatkan Gain yang konsisten. 
        Oleh sebab itu kita memerlukan skillset investasi yang "komplit". 
        Dengan mengikuti 8BAGGERS Value Investing Camp, kami akan menyediakan "tools" yang Anda butuhkan dalam memulai perjalanan investasi Anda. 
        Sehingga Anda dapat menjadi Investor Independen yang "mandiri".
    </h2>

    <h2 class="text-center text-lg sm:text-xl py-4 px-10" >
        Benefit yang akan Anda dapatkan :
    </h2>

    <div class="flex justify-center" >
        <div class="grid sm:grid-cols-2 justify-center mx-10 pl-2">
            <div class="">
                <ul class="list-inside list-disc sm:p-2 leading-relaxed">
                    <li class="text-lg sm:text-xl p-1 px-2 h-16 custom-list">Langkah - langkah pengajaran yang jelas</li>
                    <li class="text-lg sm:text-xl p-1 px-2 h-16 custom-list">Adanya Zoom Meeting pada akhir periode kelas</li>
                    <li class="text-lg sm:text-xl p-1 px-2 h-16 custom-list">Materi yang bisa didownload dan dibaca ulang</li>
                </ul>
            </div>
            <div class="">
                <ul class="list-inside list-disc sm:p-2 leading-relaxed">
                    <li class="text-lg sm:text-xl py-1 px-2 h-16 custom-list">Mengajarkanmu untuk menjadi Investor Mandiri</li>
                    <li class="text-lg sm:text-xl py-1 px-2 h-16 custom-list">Dapat masuk ke grup diskusi Value Investor</li>
                    <li class="text-lg sm:text-xl py-1 px-2 h-16 custom-list">Murni Ilmu Value Investing</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="flex justify-center mt-10" >
        <button type="button" class="gradient-color px-5 py-5 rounded-xl">
            <a href="https://linktr.ee/8baggersServices" class="text-gray-50 text-lg sm:text-xl">
                Register Now
            </a>
        </button>
    </div>

    <div class="flex justify-center bg-gray-50 mt-10 py-10" >
        <div class="text-center w-1/4 mt-10">
            <h1 class="text-2xl sm:text-4xl w-25 font-semibold">
                Testimoni
            </h1>
            <hr class="border-b-4 content-center logo-border-color  mt-5">
        </div>
    </div>

    <div class="container m-auto px-4 pb-10 md:px-12 md:pb-4 w-full h-full" >
        <div class="slider autoplay max-h-screen min-h-full w-full m-auto">
            @foreach ($images as $image)
                <div id="{{ $image->id }}"
                    tabindex="0"
                    class="m-auto px-5 items-center">
                    <img src="{{URL::to('/') }}/images/testimoni/{{$image->images}}"  class="m-auto">
                </div>
            @endforeach
        </div>
    </div>
@endsection

@push('carousel-scripts')
    <script>

        $('.slider-landing').slick({
            dots: true,
            prevArrow: $('.prev'),
            nextArrow: $('.next'),
            slidesToShow: 1,
            slidesToScroll: 1,
            speed: 1000,
            autoplay: true,
            autoplaySpeed: 3000,
            cssEase: 'linear',
            variableWidth: true,
            infinite: true
        });

        $('.slider').slick({
            dots: true,
            infinite: false,
            speed: 300,
            slidesToShow: 3,
            slidesToScroll: 3,
            responsive: [
            {
                breakpoint: 1024,
                settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                infinite: true,
                dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                slidesToShow: 2,
                slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                slidesToShow: 1,
                slidesToScroll: 1
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
            ]
        });

        $('.autoplay').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
        });
    </script>
@endpush