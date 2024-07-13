<?php

namespace App\Livewire;
use Livewire\Attributes\Validate;

use Livewire\Component;

class MerchantPay extends Component
{
    public $mobile_number = "";

    #[Validate('required')]
    public $merchant_number="";
    #[Validate('required')]
    public $amount="";

    #[Validate('required')]
    public $currency="";

    public $error = false;
    public $error_message = "";


    public function pay()
    {
       sleep(3);
        $this->redirect('/pay_merchant',navigate:true);
    }


    public function render()
    {
        return view('livewire.merchant-pay');
    }
}
