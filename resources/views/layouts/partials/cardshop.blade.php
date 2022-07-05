<!--card#1-->
    <div class="md:h-[25rem] h-64 md:w-64 w-48 bg-white  md:hover:h-[34.375rem] md:hover:w-72 hover:scale-110 hover:shadow-lg">
      <div class="bg-white rounded border border-slate-100"> 
        <a href="#">
          <img class="rounded-t-lg md:h-[22.5rem] h-72 md:w-64 w-52" src="\image\karroc.png" alt="" />
        </a>
      </div>
      <div class="inline-flex space-x-2">
        <p class=" line-through text-pink-700 pt-1 px-2">€29.99</p>
        <p class="text-pink-700  px-2 text-xl">€19.99</p>
      </div>
      <div class="p-5 ">
         
        <a href="#">
          @foreach($users as $item)
         <p class="text-base tracking-tight text-gray-900 dark:text-white">{{$item->title}}</p>
         @endforeach
        </a>
        
         <p class="font-normal text-base text-gray-700 dark:text-gray-400">Jolly arancione</p>
        <!-- <p class="font-normal text-center invisible hover:visible text-[12px] text-gray-700 dark:text-gray-400">Lorem ipsum dolor sit amet,consectetur adipiscing elit,sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
        commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p> -->
      </div>
      <div class=" invisible md:visible py-5 px-2 pl-8">
        <a href="#" class="text-white  opacity-0 hover:opacity-100 text-white bg-pink-500 hover:bg-pink-500 focus:outline-none focus:ring-4 focus:ring-pink-300 font-small rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:focus:ring-pink-900">
           AGGIUNGI AL CARRELLO
        </a>
      </div> 
    </div>

