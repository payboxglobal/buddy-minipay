<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class Dashboard extends Component
{

 #[Title("Dashbaord")]


    public function render()
    {
        return view('livewire.dashboard');
    }
}
