<?php

namespace App\Livewire;

use Livewire\Component;

class MerchantPay extends Component
{
    public $mobile_number = "";


    public $error = false;
    public $error_message = "";
    public function render()
    {
        return view('livewire.merchant-pay');
    }
}
