<x-guest-layout>
    <header class="relative">
        <div  x-data="{ isOpen: false }" class="container mx-auto px-4 sm:px-6 lg:px-8 py-6 lg:flex lg:items-center lg:justify-between">
          <div class="flex items-center justify-between ">
            <a class="flex items-center -mx-1" href="#">
                <x-application-mark></x-application-mark>
              <div class="mx-1 text-gray-700">
                <h3 class="uppercase tracking-[0.15em] font-medium ">E-Intern</h3>
                <p class="text-xs italic ">Portal</p>
              </div>
            </a>

            <button class="text-gray-600 lg:hidden " @click="isOpen = !isOpen">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16m-7 6h7" />
              </svg>
            </button>
          </div>

          <div  :class="[isOpen ? 'opacity-100 ' : 'opacity-0 -translate-x-full ']"  class=" absolute lg:static transition-all duration-300 w-full py-12 lg:py-0 left-1/2 lg:opacity-100 lg:translate-x-0 lg:bg-transparent lg:w-auto -translate-x-1/2 top-20 sm:top-24 bg-[#475F45] ">
            <nav class="flex flex-col items-center space-y-8 lg:flex-row lg:space-y-0 lg:-mx-4">
                {{-- <a href="#" class="font-medium text-white lg:text-[#101d0f] lg:hover:text-gray-400 lg:mx-4">
                    Home
                </a>

                <a href="#" class="font-medium text-white lg:text-[#475F45] lg:hover:text-gray-400 lg:mx-4">
                    Visit
                </a>

                <a href="#" class="font-medium text-white lg:text-[#475F45] lg:hover:text-gray-400 lg:mx-4">
                    Exhibitions
                </a>

                <a href="#" class="font-medium text-white lg:text-[#475F45] lg:hover:text-gray-400 lg:mx-4">
                    Programs & Events
                </a>

                <a href="#" class="font-medium text-white lg:text-[#475F45] lg:hover:text-gray-400 lg:mx-4">
                    Store
                </a> --}}

                <a class="px-8 py-2.5 text-white lg:text-[#475F45] lg:hover:bg-[#475F45] lg:hover:text-white duration-300 transition-colors font-medium lg:mx-4 border-2 lg:border-[#475F45] border-white" href="{{route('login')}}">Login </a>
            </nav>
          </div>
        </div>
      </header>

      <section class="container flex flex-col items-center px-6 py-12 mx-auto lg:flex-row sm:px-6 lg:px-8 bg-[url('/images/pattern.svg')]">
          <div class="lg:w-1/2 lg:pl-20 bg-slate-100 bg-opacity-30">

            <p class="max-w-lg mt-4 text-gray-500">Welcome to</p>
            <h1 class="max-w-xl font-serif text-4xl font-medium tracking-wide text-[#343D33] capitalize md:text-6xl ">Federal Medical Centre Abuja, <br>
                E-Intern Portal
            </h1>
            <div class="mt-6 sm:flex sm:items-center">
              <a href="{{route('intern.login')}}" class="bg-[#475F45] hover:bg-[#475F45]/80 duration-300 transition-colors border-2 border-[#475F45] px-6 block text-center py-3 uppercase text-sm font-bold leading-4 tracking-widest text-white ">
                Intern Login
              </a>

              <a href="{{route('login')}}" class="border-2 text-sm duration-300 transition-colors hover:bg-[#475F45] hover:text-white font-bold leading-4 mt-4 sm:mt-0 tracking-widest text-[#475F45] sm:mx-4 border-[#475F45] px-6 block text-center py-3 uppercase">
                Admin
              </a>
            </div>
          </div>

          <div class="h-[38rem] mt-12 lg:mt-0 w-full mx-auto max-w-md overflow-hidden rounded-t-full outline outline-4 outline-offset-4 outline-[#475F45]/40">
            <img class="object-cover w-full h-full rounded-t-full " src="{{asset('images/airway-man.jpg')}}" alt="fmc_training on going" />
          </div>
      </section>



      <footer class="bg-[#414840]">
        <div class="container px-6 py-8 mx-auto space-y-8 lg:space-y-0 lg:flex lg:justify-between">
          <div>
            <a class="flex items-center -mx-2" href="#">
                <x-application-mark></x-application-mark>
                <div class="mx-1 text-gray-700">
                    <h3 class="uppercase tracking-[0.15em] font-medium ">E-Intern</h3>
                    <p class="text-xs italic ">Portal</p>
                </div>
            </a>

            <p class="max-w-lg mt-6 leading-relaxed text-white ">
            E-intern portal
            </p>
          </div>



          <div>
            <p class="font-medium text-white capitalize">Connect</p>

            <div class="flex mt-6 -mx-4">
              <a class="mx-4 text-white hover:text-gray-300" href="#">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M23 3.00005C22.0424 3.67552 20.9821 4.19216 19.86 4.53005C19.2577 3.83756 18.4573 3.34674 17.567 3.12397C16.6767 2.90121 15.7395 2.95724 14.8821 3.2845C14.0247 3.61176 13.2884 4.19445 12.773 4.95376C12.2575 5.71308 11.9877 6.61238 12 7.53005V8.53005C10.2426 8.57561 8.50127 8.18586 6.93101 7.39549C5.36074 6.60513 4.01032 5.43868 3 4.00005C3 4.00005 -1 13 8 17C5.94053 18.398 3.48716 19.099 1 19C10 24 21 19 21 7.50005C20.9991 7.2215 20.9723 6.94364 20.92 6.67005C21.9406 5.66354 22.6608 4.39276 23 3.00005V3.00005Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </a>

              <a class="mx-4 text-white hover:text-gray-300" href="#">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M18 2H15C13.6739 2 12.4021 2.52678 11.4645 3.46447C10.5268 4.40215 10 5.67392 10 7V10H7V14H10V22H14V14H17L18 10H14V7C14 6.73478 14.1054 6.48043 14.2929 6.29289C14.4804 6.10536 14.7348 6 15 6H18V2Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </a>

              <a class="mx-4 text-white hover:text-gray-300" href="#">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M16 8C17.5913 8 19.1174 8.63214 20.2426 9.75736C21.3679 10.8826 22 12.4087 22 14V21H18V14C18 13.4696 17.7893 12.9609 17.4142 12.5858C17.0391 12.2107 16.5304 12 16 12C15.4696 12 14.9609 12.2107 14.5858 12.5858C14.2107 12.9609 14 13.4696 14 14V21H10V14C10 12.4087 10.6321 10.8826 11.7574 9.75736C12.8826 8.63214 14.4087 8 16 8V8Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                  <path d="M6 9H2V21H6V9Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                  <path d="M4 6C5.10457 6 6 5.10457 6 4C6 2.89543 5.10457 2 4 2C2.89543 2 2 2.89543 2 4C2 5.10457 2.89543 6 4 6Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </a>

              <a class="mx-4 text-white hover:text-gray-300" href="#">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M4 4H20C21.1 4 22 4.9 22 6V18C22 19.1 21.1 20 20 20H4C2.9 20 2 19.1 2 18V6C2 4.9 2.9 4 4 4Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                  <path d="M22 6L12 13L2 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </a>
            </div>
          </div>
        </div>

        <p class="w-full py-6 mx-auto text-white text-center bg-[#343D33]">
          &copy; {{ date('Y')}} All rights reserved. ICT FMC Abuja
        </p>
      </footer>

</x-guest-layout>
