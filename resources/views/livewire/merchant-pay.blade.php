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

    <main class="flex justify-center w-full mt-5" x-data="minipay_address">


        <form class=" w-full p-10 bg-white  items-center mx-4 border-0  rounded-lg " wire:submit="pay()">
            <div>
                <label for="price" class="block text-sm font-medium leading-6 text-gray-900">Amount</label>
                <div class="relative mt-2 rounded-md shadow-sm">
                    <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                        <span class="text-gray-500 sm:text-sm">$</span>
                    </div>
                    <input type="number" name="price" id="price" step="0.01" wire:model.live.debounce="amount"
                        class="block  w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                        placeholder="0.00">
                    <div class="absolute inset-y-0 right-0 flex items-center">
                        <label for="currency" class="sr-only">Currency</label>
                        <select id="currency" name="currency" wire:model="currency"
                            class="h-full rounded-md border-0 bg-transparent py-0 pl-2 pr-7 text-gray-500 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm">
                            <option>CUSD</option>
                            <!-- <option>CAD</option>
                        <option>EUR</option> -->
                        </select>
                    </div>
                </div>
            </div>

            <div class="pt-5">
                <label for="merchant_number" class="block text-sm font-medium leading-6 text-gray-900">Merchant
                    Number</label>
                <div class="relative mt-2 rounded-md shadow-sm">
                    <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3 ">
                        <span class="text-gray-500 sm:text-sm">#</span>
                    </div>
                    <input type="text" name="merchant_number" id="merchant_number"
                        wire:model.live.debounce="merchant_number"
                        class="block  w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                        placeholder="">

                </div>
            </div>


            <button type="submit" wire:loading.attr="disabled" wire:loading.class="bg-slate-300"
                class="flex w-full justify-center bg-teal-600  mt-20 text-2xl px-10 py-3 rounded-full text-white ">Pay
                {{$amount}} </button>


            <button type="button"
                class=" flex w-full justify-center bg-teal-600  mt-20 text-2xl px-10 py-3 rounded-full text-white "
                x-on:click="get_address()">Get Address </button>

            <button type="button"
                class=" flex w-full justify-center bg-teal-600  mt-20 text-2xl px-10 py-3 rounded-full text-white "
                x-on:click="pay_celo()">Pay Celo </button>

            <button type="button"
                class=" flex w-full justify-center bg-teal-600  mt-20 text-2xl px-10 py-3 rounded-full text-white "
                x-on:click="get_balance()">Get Balance </button>
        </form>




    </main>


    <footer class="">
        @if($error)
            <livewire:error :message="$error_message" />
        @endif
    </footer>



    @script


    <script type="module">

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
                            alert(accounts[0]);

                            // let  address= accounts[0];
                            // return address;
                        }

                        // User is not using MiniPay
                    }

                    //return '0x99A03CF527acc798585c025068bBBa0B9e645347';
                },
                async pay_celo() {

                    const walletClient = window.createWalletClient({
                        chain: window.celoAlfajores,
                        transport: window.custom(!window.ethereum)
                    })

                    alert(walletClient);

                    const publicClient = window.createPublicClient({
                        chain: window.celoAlfajores,
                        transport: window.http()
                    })

                    const STABLE_TOKEN_ADDRESS = "0x874069fa1eb16d44d622f2e0ca25eea172369bc1";
                    const address = '0x99A03CF527acc798585c025068bBBa0B9e645347';
                    const receiverAddress = '0x99A03CF527acc798585c025068bBBa0B9e645347';
                    const transferValue = 0.1;



                    async function requestTransfer(tokenAddress, transferValue, tokenDecimals) {

                        let hash = await client.sendTransaction({
                            to: tokenAddress,
                            // to: '0x765DE816845861e75A25fCA122bb6898B8B1282a' // cUSD (Mainnet)
                            // to: '0xcebA9300f2b948710d2653dD7B07f33A8B32118C' // USDC (Mainnet)
                            // to: '0x48065fbbe25f71c9282ddf5e1cd6d6a887483d5e' // USDT (Mainnet)
                            data: window.encodeFunctionData({
                                abi: window.stableTokenABI, // Token ABI can be fetched from Explorer.
                                functionName: "transfer",
                                args: [
                                    receiverAddress,
                                    // Different tokens can have different decimals, cUSD (18), USDC (6)
                                    window.parseUnits(`${Number(transferValue)}`, tokenDecimals),
                                ],
                            }),
                            // If the wallet is connected to a different network then you get an error.
                            chain: window.celoAlfajores,
                            // chain: celo,
                        });

                        const transaction = await window.publicClient.waitForTransactionReceipt({
                            hash, // Transaction hash that can be used to search transaction on the explorer.
                        });

                        if (transaction.status === "success") {
                            // Do something after transaction is successful.
                            alert("Successfully")
                        } else {
                            // Do something after transaction has failed.
                            alert("Failed")
                        }
                    }

                    $transfer = await requestTransfer(STABLE_TOKEN_ADDRESS, 0.1, 18);
                    alert($transfer);




                }
                ,
                async get_balance() {


                    const STABLE_TOKEN_ADDRESS = "0x874069fa1eb16d44d622f2e0ca25eea172369bc1";
                    const address = '0x99A03CF527acc798585c025068bBBa0B9e645347';



                    async function checkCUSDBalance(publicClient, address) {



                        let StableTokenContract = window.getContract({
                            abi: window.stableTokenABI,
                            address: STABLE_TOKEN_ADDRESS,
                            publicClient,
                        });



                        let balanceInBigNumber = await publicClient.getBalance({
                            address
                        })

                        let balanceInWei = balanceInBigNumber.toString();

                        let balanceInEthers = window.formatEther(balanceInWei);

                        return balanceInEthers;
                    }

                    const publicClient = window.createPublicClient({
                        chain: window.celoAlfajores,
                        transport: window.http(),
                    }); // Test 

                    const publicClient_main = window.createPublicClient({
                        chain: window.celo,
                        transport: window.http(),
                    }); // Test 

                    let balance = await checkCUSDBalance(publicClient, address); // In Ether unit

                    alert(balance);
                }

            }
        })



    </script>
    @endscript
</div>