<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Reactive;

class Error extends Component
{
    #[Reactive]
    public $message;


     public function  mount($message)
     {
        $this->message = $message;
     }
    public function render()
    { 

        return view('livewire.error');
    }
}
