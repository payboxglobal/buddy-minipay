<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use Livewire\Attributes\Computed;


class Authenticate extends Component
{

    public $mobile_number = "";
    
     public $error_message="Here";
    public $error= false;

    public function login()
    {
      

     $response= Http::withToken("dmJL5NN2IVlRcPzswHm6DpdBGX0QN6xRYckf")->post('localhost/paybox-merchant-v9/public/wallet/auth',[]);
     

     if(!$response->successful()){

            $this->error_message = json_decode($response->body(), true)['message'];
            $this->error= true;
     }
     else{
      
        session(['user' => 'Philip']);

        $this->redirect("dashboard");
     }
    }

    public function logout()
    {
     
       session()->forget('user');

        $this->redirect("dashboard");

    }

    public function render()
    {
        return view('livewire.authenticate')->with([
            'error_message' => $this->error_message
        ]);;
    }
}
