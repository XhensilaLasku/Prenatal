{{-- <header class="p-3 bg-dark text-white">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
        </a>
  
        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="#" class="nav-link px-2 text-secondary">Home</a></li>
          <li><a href="#" class="nav-link px-2 text-white">Features</a></li>
          <li><a href="#" class="nav-link px-2 text-white">Pricing</a></li>
          <li><a href="#" class="nav-link px-2 text-white">FAQs</a></li>
          <li><a href="#" class="nav-link px-2 text-white">About</a></li>
        </ul>
  
        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
          <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
        </form>
  
        @auth
          {{auth()->user()->name}}
          <div class="text-end">
            <a href="{{ route('logout.perform') }}" class="btn btn-outline-light me-2">Logout</a>
          </div>
        @endauth
  
        @guest
          <div class="text-end">
            <a href="{{ route('login.perform') }}" class="btn btn-outline-light me-2">Login</a>
            <a href="{{ route('register.perform') }}" class="btn btn-warning">Sign-up</a>
          </div>
        @endguest
      </div>
    </div>
  </header> --}}

  <nav class="bg-white h-16 sm:h-32 lg:h-40 border-b-2 border-slate-100 ">
    <div class=" mx-auto px-2 sm:px-6 lg:px-8">
      <div class="relative flex items-center justify-between h-16">
      <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
        <!-- toggle sidebar for smartphone-->
        <div class="visible lg:invisible">
          <button id="nav-toggle" class="flex items-center px-5 text-black">
            <svg class=" h-4 w-6" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
          </button>
        </div>
      </div>
      <!--logo-->
      <div class="w-full flex items-center justify-center sm:justify-center lg:justify-start sm:items-stretch ">
        <div class="flex sm:pl-12 sm:pt-10 md:pt-20 lg:bottom-0 lg:pl-28" id="logo"> 
          <img class="inline-flex md:h-10 md:w-7 sm:h-9 sm:w-6 h-5 w-4" src="\image\p.png">
          <img class="inline-flex md:h-7 md:w-7 sm:h-6 sm:w-6 h-4 w-3.5" id="letters" src="\image\r.png">
          <img class="inline-flex md:h-7 md:w-7 sm:h-6 sm:w-6 h-4 w-3.5" id="letters" src="\image\e.png">
          <img class="inline-flex md:h-7 md:w-7 sm:h-6 sm:w-6 h-4 w-4" id="letters" src="\image\n.png">
          <img class="inline-flex md:h-7 md:w-7 sm:h-6 sm:w-6  h-4 w-4" id="letters" src="\image\a.png">
          <img class="inline-flex md:h-10 md:w-3.5 sm:h-8.5 sm:w-3 h-4.5 w-2" src="\image\t.png">
          <img class="inline-flex md:h-7 md:w-7 sm:h-6 sm:w-6 h-4 w-4" id="letters" src="\image\a.png">
          <img class="inline-flex md:h-10 md:w-3.5 sm:h-8.5 sm:w-3 h-4.5 w-2" src="\image\l.png"> 
          <img class="inline-flex md:h-2.5 md:w-2.5 sm:h-2 sm:w-2 h-1.5 w-1.5 " id="heartimg" src="\image\heart.png">
        </div>
        <!-- search -->
         <div id="search" class="sm:pt-2 sm:pl-96 md:pt-32 md:pl-96 pl-52 pt-1 ">
          <input type="search" class="form-control relative md:invisible lg:visible md:w-full px-1 md:w-[510px] w-0 md:py-1.5 text-base font-normal text-gray-700  bg-clip-padding md:border-b-2 md:border-gray-300 transition ease-in-out"> 
          <button>
          <span class="input-group-text relative flex hover:inline-flex md:left-[-50px] md:top-1 items-center px-3 py-1.5 text-base font-normal text-gray-700 text-center whitespace-nowrap rounded " id="basic-addon2">
            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="search" class="w-4" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
              <path fill="currentColor" d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"></path>
            </svg>
          </span>
          </button>
        </div>
      <!--nav menu--> 
      
      <div id="nav-content" class="w-full flex-grow lg:flex lg:items-center md:invisible lg:visible lg:w-auto hidden md:block  pt-6 lg:pt-48 overflow-y-auto " >
        <ul class="absolute inline-flex lg:flex lg:visible justify-start items-center pt-2 pr-64 right-0 space-x-8">
          <li>
            <a class="inline-block text-xs text-black hover:text-pink-600" href="#">Abbigliamento</a>
          </li>
          <li>
            <a class="inline-block text-xs text-black hover:text-pink-600" href="#">Passeggio</a>
          </li>
          <li>
            <a class="inline-block text-xs text-black hover:text-pink-600" href="#">Auto e viaggio</a>
          </li>
          <li>
            <a class="inline-block text-xs text-black hover:text-pink-600" href="#">Gioco</a>
          </li>
          <li>
            <a class="inline-block text-xs text-black hover:text-pink-600" href="#">Allattamento e suzione</a>
          </li>
          <li>
            <a class="inline-block text-xs text-black hover:text-pink-600" href="#">Pappa</a>
          </li>
          <li>
            <a class="inline-block text-xs text-black hover:text-pink-600" href="#">Igiene e benessere</a>
          </li>
          <li>
            <a class="inline-block text-xs text-black hover:text-pink-600" href="#">Promo</a>
          </li>
          <li>
            <a class="inline-flex text-xs text-lime-400" href="#">Vip Club</a>
          </li>
          <li>
            <a class="inline-flex text-xs text-pink-600 place-items-end" href="#">Tu e Prenatal</a>
          </li>
        </ul>
      </div>

    <div class="inline-flex">
  <button class="space-x-8 lg:space-x-4 items-center justify-center p-2 rounded-md text-black" type="button" >
    <a href="#" id="iconlink" class="lg:pt-3 text-sm font-[Regular] hover:text-pink-600">Prenota&Ritira</a>
    <a href="#" id="iconlink" class="lg:pt-6 text-sm font-[Regular] hover:text-pink-600">Innegozio</a>
  </button> 
  <a class="space-x-8 pt-28 lg:space-x-4 items-center justify-center p-2 rounded-md text-black" type="button" >
    <svg xmlns="http://www.w3.org/2000/svg" class= "h-6 w-6 hover:text-pink-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
      <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
      <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
    </svg>
  </a> 
  @guest
  <a href="{{ route('register.perform') }}"  class="space-x-8 pt-28 lg:space-x-4 items-center justify-center p-2 rounded-md text-black" type="button" data-modal-toggle="defaultModal">
    <svg xmlns="http://www.w3.org/2000/svg" class=" h-6 w-6 hover:text-pink-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
      <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
    </svg>
  </a>
  @endguest
  @auth
  {{auth()->user()->name}}
  <div class="space-x-8 pt-28 lg:space-x-4 items-center justify-center p-2 rounded-md text-black">
    <a href="{{ route('logout.perform') }}" class=""><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
      <path stroke-linecap="round" stroke-linejoin="round" d="M13 7a4 4 0 11-8 0 4 4 0 018 0zM9 14a6 6 0 00-6 6v1h12v-1a6 6 0 00-6-6zM21 12h-6" />
    </svg></a>
  </div>
@endauth
  <a class="space-x-8 pt-28 lg:space-x-4 items-center justify-center p-2 rounded-md text-blue-600"  >
    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-black hover:text-pink-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
      <path stroke-linecap="round" stroke-linejoin="round" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
    </svg>
  </a> 
  </div>  
  </nav>
