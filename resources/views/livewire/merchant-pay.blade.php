<div class=" pt-10 -6 w-full">
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
    <header class="flex justify-start w-full space-x-2 items-center pl-3">
        <span><a href="/" wire:navigate>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M9 15 3 9m0 0 6-6M3 9h12a6 6 0 0 1 0 12h-3" />
                </svg>


            </a></span>

        <span class=" text-slate-600 text-2xl">
            Pay Merchant
        </span>
    </header>

    <main class="flex justify-center w-full" x-data="minipay_address">

        <button type="button" class="bg-teal-600  mt-20 text-2xl px-10 py-3 rounded-full text-white "
            x-on:click="get_address()">Get Address </button>

    </main>


    <footer class="">
        @if($error)
            <livewire:error :message="$error_message" />
        @endif
    </footer>



    @script
    <script>

        console.log("Merchant Pay");


        Alpine.data('minipay_address', () => {
            return {
                count: 0,
                async get_address() {


                    // The code must run in a browser environment and not in node environment
                    if (window && window.ethereum) {
                        // User has a injected wallet

                        if (window.ethereum.isMiniPay) {
                            // User is using Minipay

                            // Requesting account addresses
                            let accounts = await window.ethereum.request({
                                method: "eth_requestAccounts",
                                params: [],
                            });

                            // Injected wallets inject all available addresses,
                            // to comply with API Minipay injects one address but in the form of array
                            console.log(accounts[0]);
                            alert(accounts[0]);
                        }

                        // User is not using MiniPay
                    }
                },
            }
        })



    </script>
    @endscript
</div>