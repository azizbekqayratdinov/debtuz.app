<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\debt;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function clientsPage(){
        $clients = Client::all();
        $debts = debt::all();
        $summa = debt::sum('summa');
        $i = 1;
        return view('client' , compact('clients' , 'i' , 'debts','summa'));
    }
    public function summa($client_id){
        $summa = debt::where('client_id' , $client_id)->sum('summa');
        return $summa;
    }
}
