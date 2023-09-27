<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\debt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ClientController extends Controller
{
    public function clientsPage(){
        $clients = Client::all();
        $debts = debt::all();
        $summa = debt::sum('summa');
        $i = 1;
        return view('client' , compact('clients' , 'i' , 'debts','summa'));
    }
    public function addClientPage()
    {
        return view('addclient');
    }
    public function addclient(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required|unique:clients',
            'phone' => 'required|min:9|unique:clients',
        ]);
        $addclient = Client::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'status' => 1
        ]);
        return $this->clientsPage();
    }
}
