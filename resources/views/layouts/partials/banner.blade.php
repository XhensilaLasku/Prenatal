<!-- banner -->
<div id="banner" class=" mx-auto absolute md:object-cover md:w-full w-full top-72 md:h-96 h-5/6 lg:bg-[#EFEFEF] bg-[#F7E0E1]">
    <img class="absolute hidden lg:block " src="\image\banner.png" alt="">
    <div class=" absolute md:top-64 bottom-96 md:left-36 left-12 md:h-40 h-40 md:w-80 h-32 w-80 sm:w-[28.125rem]  bg-pink-600">
        <a href="#" class="absolute top-4 pl-4 text-sm text-white">Passeggini</a>
        <a href="#"class="absolute top-10 pl-4 text-lg font-bold text-white">I MIGLIORI PASSEGGINI PER LE VOSTRE PASSEGIATE</a>
        <a href="#"class="absolute top-24 pl-4 text-xs text-white" >La nostra esperienza al tuo serizio.Sed do eiusmodtempor incididunt labore et dolore magnaaliqua.</a>
    </div>

    <div id="cards" class="flex space-x-8 md:pt-7 pt-24  pl-20">
            <div class="flex invisible md:visible z-40 ">
             @include('layouts.partials.cards')
            </div>
          <div class="flex  invisible md:visible">
            @include('layouts.partials.cards')
          </div>
          <div class="flex  invisible md:visible">
            @include('layouts.partials.cards')
          </div>
    </div> 
    <div class="swiper md:hidden mySwiper pt-24  pl-0">
      <div class="swiper-wrapper">
        <div class="swiper-slide">@include('layouts.partials.cards')</div>
        <div class="swiper-slide">@include('layouts.partials.cards')</div>
        <div class="swiper-slide">@include('layouts.partials.cards')</div>
      </div>
      <div class="swiper-button-next "></div>
      <div class="swiper-button-prev"></div>
    </div>
    <div class="swiper-pagination"></div>
</div>
  <script>
    var swiper = new Swiper(".mySwiper", {
      cssMode: true,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      pagination: {
        el: ".swiper-pagination",
      },
      mousewheel: true,
      keyboard: true,
    });
  </script>
       <style>

        .swiper-slide {
          text-align: center;

          height:320px;
          width:320px;
        }
        .swiper-button-next,.swiper-button-prev
        {
          color:#db2777;
          position:absolute;
          top:250px;
        } 
        .swiper-pagination{
          fill:#db2777;
          position:absolute;
          top:420px;
        }
      </style>