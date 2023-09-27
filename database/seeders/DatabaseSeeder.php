<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Client;
use App\Models\debt;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'login'=>"aaa",
            'password'=>111
        ]);
        Client::create([
            'name'=>"Dawran",
            'phone'=>998933651302,
            'status'=>1
        ]);
        Client::create([
            'name'=>"Aziz",
            'phone'=>998933651303,
            'status'=>1
        ]);
        Client::create([
            'name'=>"Viktor",
            'phone'=>998933651304,
            'status'=>1
        ]);
        Client::create([
            'name'=>"Vitya",
            'phone'=>998933651300,
            'status'=>0
        ]);
        debt::create([
            'client_id'=>1,
            'summa'=>5000,
            'tovar'=>"Snikers",
            'date'=>"29-sentyabr",
            'plus_minus'=>"+"
        ]);
        debt::create([
            'client_id'=>2,
            'summa'=>13000,
            'tovar'=>"Pepsi",
            'date'=>"29-sentyabr",
            'plus_minus'=>"+"
        ]);
        debt::create([
            'client_id'=>2,
            'summa'=>70000,
            'tovar'=>"Pepsi",
            'date'=>"29-sentyabr",
            'plus_minus'=>"+"
        ]);
        debt::create([
            'client_id'=>2,
            'summa'=>100000,
            'tovar'=>"Pepsiу",
            'date'=>"29-sentyabr",
            'plus_minus'=>"+"
        ]);
        debt::create([
            'client_id'=>3,
            'summa'=>5000,
            'tovar'=>"Orbit",
            'date'=>"30-sentyabr",
            'plus_minus'=>"+"
        ]);
        debt::create([
            'client_id'=>3,
            'summa'=>5001,
            'tovar'=>"Orbit",
            'date'=>"30-sentyabr",
            'plus_minus'=>"+"
        ]);
        debt::create([
            'client_id'=>1,
            'summa'=>160000,
            'tovar'=>"Sге",
            'date'=>"29-sentyabr",
            'plus_minus'=>"+"
        ]);
    }
}
