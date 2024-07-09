<div class="">

    <div class=" bg-slate-800 rounded-b-2xl shadow border-0">

        <livewire:navigation />

        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 flex justify-around  p-12 items-center">
            <h2 class="font-semibold text-xl text-white leading-tight">
                {{  __('CUSD ') . round(1000.23, 3) }}
            </h2>

            <h2 class="font-semibold text-xl text-white leading-tight  bg-slate-600  px-8 py-3 rounded-full">
                Pay
            </h2>
        </div>
    </div>


    <div class="flex justify-around w-full pt-4">
        <div class="flex flex-col items-center p-12 bg-red-300  rounded-lg ">

            <div class=" text-1xl  text-white text-pretty font-bold">
                Virtual Cards
            </div>

        </div>

        <div class="flex flex-col items-center p-12 bg-green-300 rounded-lg ">

            <div class=" text-1xl  text-white text-pretty font-bold">
                Gift Cards
            </div>

        </div>
    </div>


    <section class="pt-5">
        <livewire:transaction />
    </section>

    <section class="pt-1">
        <livewire:recent-transaction />
        <livewire:recent-transaction />
        <livewire:recent-transaction />
        <livewire:recent-transaction />
        <livewire:recent-transaction />
    </section>



<footer
    class=" flex  bg-white w-full justify-between fixed bottom-0 border-0 border-t shadow rounded-md text-gray-600 p-4">

    <span class="hover:text-green-400"> <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
            stroke-width="1.5" stroke="currentColor" class="size-8">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
        </svg>
    </span>
    <span class="hover:text-green-400"> <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
            stroke-width="1.5" stroke="currentColor" class="size-8">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M2.25 8.25h19.5M2.25 9h19.5m-16.5 5.25h6m-6 2.25h3m-3.75 3h15a2.25 2.25 0 0 0 2.25-2.25V6.75A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25v10.5A2.25 2.25 0 0 0 4.5 19.5Z" />
        </svg></span>

    <span class="hover:text-green-400"> <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
            stroke-width="1.5" stroke="currentColor" class="size-8">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M21 11.25v8.25a1.5 1.5 0 0 1-1.5 1.5H5.25a1.5 1.5 0 0 1-1.5-1.5v-8.25M12 4.875A2.625 2.625 0 1 0 9.375 7.5H12m0-2.625V7.5m0-2.625A2.625 2.625 0 1 1 14.625 7.5H12m0 0V21m-8.625-9.75h18c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125h-18c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" />
        </svg>
    </span>

</footer>



</div>