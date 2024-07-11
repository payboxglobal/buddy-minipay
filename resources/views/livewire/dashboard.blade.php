<div class="">
<header>
    <div class=" bg-slate-800 rounded-b-2xl shadow border-0">

        <livewire:navigation />

        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 flex justify-around  p-12 items-center">
            <h2 class="font-semibold text-xl text-white leading-tight">
                {{  __('CUSD ') . round(1000.23, 3) }}
            </h2>

            <h2 class="font-semibold text-xl text-white leading-tight  bg-slate-600  px-8 py-3 rounded-full">
            <a href="pay_merchant" wire:navigate>   Pay</a>
            </h2>
        </div>
    </div>

    </header>


    <main class="px-2">

    <div class="flex justify-around w-full mt-4">
        <div class="flex flex-col items-center p-10 bg-red-300  rounded-lg ">
    <a href="virtual_card" wire:navigate x-transition>
            <div class=" text-1xl  text-white text-pretty font-bold">
                Virtual Cards
            </div>
        </a>
        </div>

        <div class="flex flex-col items-center p-10 bg-green-300 rounded-lg ">
        <a href="gift_card" wire:navigate x-transition>
            <div class=" text-1xl  text-white text-pretty font-bold">
                Gift Cards
            </div>
 </a>
        </div>
    </div>


    <section class="pt-5">
    <a href="transaction" wire:navigate>
     <div class=" flex justify-between bg-white p-6 w-full shadow-md text-lg rounded-lg text-slate-600">
      Transactions

    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
        class="size-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
    </svg>
</div>
        </a>
    </section>

    <section class="pt-1">
    
        <livewire:recent-transaction />
      

    </section>

    @unless (session('user'))
    <section>
        <a href="login" wire:navigate>
        <div class="bg-white p-6  shadow-md text-lg text-slate-600 mt-3 rounded-lg flex items-center " x-transition>
       
        <svg class="h-12 w-12 text-gray-500 inline-flex items-center justify-center p-2 rounded-lg focus:outline-none transition"
                stroke="currentColor" fill="none" viewBox="0 0 24 24" class="size-4">

                <path class="inline-flex" fill-rule="evenodd"
                    d="M18.685 19.097A9.723 9.723 0 0 0 21.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 0 0 3.065 7.097A9.716 9.716 0 0 0 12 21.75a9.716 9.716 0 0 0 6.685-2.653Zm-12.54-1.285A7.486 7.486 0 0 1 12 15a7.486 7.486 0 0 1 5.855 2.812A8.224 8.224 0 0 1 12 20.25a8.224 8.224 0 0 1-5.855-2.438ZM15.75 9a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z"
                    clip-rule="evenodd" />

            </svg>
            <span>Login to Buddy</span>
        </div>
</a>
    </section>
    @endunless


</main>




    <footer
        class=" flex  bg-white w-full justify-between fixed bottom-0 border-0 border-t shadow rounded-md text-gray-600 p-4">

        <span class="hover:text-green-400"> <a href="/" wire:navigate><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke-width="1.5" stroke="currentColor" class="size-8">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg></a>
        </span>
        <span class="hover:text-green-400"><a href="/card" wire:navigate> <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke-width="1.5" stroke="currentColor" class="size-8">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M2.25 8.25h19.5M2.25 9h19.5m-16.5 5.25h6m-6 2.25h3m-3.75 3h15a2.25 2.25 0 0 0 2.25-2.25V6.75A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25v10.5A2.25 2.25 0 0 0 4.5 19.5Z" />
            </svg></a></span>

        <span class="hover:text-green-400"> <a href="/reward" wire:navigate><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke-width="1.5" stroke="currentColor" class="size-8">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M21 11.25v8.25a1.5 1.5 0 0 1-1.5 1.5H5.25a1.5 1.5 0 0 1-1.5-1.5v-8.25M12 4.875A2.625 2.625 0 1 0 9.375 7.5H12m0-2.625V7.5m0-2.625A2.625 2.625 0 1 1 14.625 7.5H12m0 0V21m-8.625-9.75h18c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125h-18c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" />
            </svg></a>
        </span>

    </footer>



</div>