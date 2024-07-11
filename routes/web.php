<?php


use Illuminate\Support\Facades\Route;
use App\Livewire\Counter;
use App\Livewire\Dashboard;
use App\Livewire\Navigation;
use App\Livewire\Authenticate;
use App\Livewire\CardDetail;
use App\Livewire\CardPurchased;
use App\Livewire\GiftCard;
use App\Livewire\MerchantPay;
use App\Livewire\PurchaseCard;
use App\Livewire\RecentTransaction;
use App\Livewire\Transaction;
use App\Livewire\TransactionStatus;
use App\Livewire\VirtualCard;
use App\Livewire\Reward;
use App\Livewire\Profile;










// Route::get('/', function () {
//     return view('livewire.dashboard');
// });

Route::get('/', Dashboard::class);
Route::get('dashboard', Dashboard::class);
Route::get('card', CardPurchased::class);
Route::get('buy_card', PurchaseCard::class);
Route::get('reward', Reward::class);
Route::get('login', Authenticate::class);
Route::get('transaction', Transaction::class);
Route::get('transaction_status', TransactionStatus::class);
Route::get('gift_card', GiftCard::class);
Route::get('virtual_card', VirtualCard::class);
Route::get('pay_merchant', MerchantPay::class);
Route::get('profile', Profile::class);




