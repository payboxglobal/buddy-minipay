<div wire:class="text-red-200">
    {{_("Because she competes with no one, no one can compete with her")}} "Red"

   
    <div>
        <input type="text" x-model="search">
    
        Searching for: <span x-text="search"></span>
    </div>

    <div x-data="{ count: 0 }">
        <!-- Render the current "count" value inside an element... -->
        <h2 x-text="count" class="text-red-400"></h2>
    
        <!-- Increment the "count" value by "1" when a click event is dispatched... -->
        <button x-on:click="count++">+</button>

        <div wire:loading.delay.longest>..dfdd.</div>
    </div>
</div>
