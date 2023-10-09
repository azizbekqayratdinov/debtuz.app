<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\debt;
use Illuminate\Http\Request;

class DebtController extends Controller
{
    public function debtPage($client_id){
        $i = 1;
        $single = Client::where('id' , $client_id)->get();
        $debts = debt::where('client_id' , $client_id)->get();
        return view('debt' , compact('client_id' , 'single' , 'debts' , 'i'));
    }
    public function debt(){

    }
}
