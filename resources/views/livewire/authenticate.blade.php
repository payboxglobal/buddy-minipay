<div class=" pt-10 -6 w-full">
 <header class="flex justify-start w-full space-x-2 items-center pl-3">
   <span><a href="/" wire:navigate>
<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
    class="size-6">
    <path stroke-linecap="round" stroke-linejoin="round" d="M9 15 3 9m0 0 6-6M3 9h12a6 6 0 0 1 0 12h-3" />
</svg>


</a></span>

<span class=" text-slate-600 text-2xl">
    Login
</span>
</header>

<main>
    <form>
    <button   type="button" wire:click="login()"> Login</button>
    <button  type="button" wire:click="logout()"> Logout</button>

    </form>
 
</main>


<footer class="">
@if($error)
    <livewire:error :message="$error_message" />
@endif
</footer>


@script
<script>

 console.log("Welcome");

</script>
@endscript
</div>
