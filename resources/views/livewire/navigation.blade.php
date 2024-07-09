<div x-data default="{ open: false }">
   
    <nav class="bg-slate-800 border-0 pt-10 text-white flex ">
        <!-- Primary Navigation Menu -->
        <div class="max-w-7xl  px-4 sm:px-6 lg:px-8 flex">
            <div class="flex justify-between h-16">

               <!-- Hamburger -->
                <div class="-mr-2 flex items-center sm:hidden">
                    <button @click="open = ! open"
                        class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 focus:outline-none transition">
                        <svg class="h-10 w-10 text-gray-500" stroke="currentColor" fill="none" viewBox="0 0 24 24" class="size-4">

                            <path v-bind:class="{'hidden': open, 'inline-flex': open }" fill-rule="evenodd"
                                d="M18.685 19.097A9.723 9.723 0 0 0 21.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 0 0 3.065 7.097A9.716 9.716 0 0 0 12 21.75a9.716 9.716 0 0 0 6.685-2.653Zm-12.54-1.285A7.486 7.486 0 0 1 12 15a7.486 7.486 0 0 1 5.855 2.812A8.224 8.224 0 0 1 12 20.25a8.224 8.224 0 0 1-5.855-2.438ZM15.75 9a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z"
                                clip-rule="evenodd" />

                            <path v-bind:class="{'hidden': open, 'inline-flex': open }" fill-rule="evenodd"
                                d="M18.685 19.097A9.723 9.723 0 0 0 21.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 0 0 3.065 7.097A9.716 9.716 0 0 0 12 21.75a9.716 9.716 0 0 0 6.685-2.653Zm-12.54-1.285A7.486 7.486 0 0 1 12 15a7.486 7.486 0 0 1 5.855 2.812A8.224 8.224 0 0 1 12 20.25a8.224 8.224 0 0 1-5.855-2.438ZM15.75 9a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z"
                                clip-rule="evenodd" />
                        </svg>


                    </button>
                </div>
                <div class="flex">
                    <!-- Logo -->
                    <div class="shrink-0 flex items-center text-xl  text-gray-400">

                        Hello, Buddy
                     
                    </div>

                    
                </div>

    
            </div>
        </div>

      
    </nav>
 
</div>