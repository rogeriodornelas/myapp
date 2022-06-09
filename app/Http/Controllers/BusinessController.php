<?php

namespace App\Http\Controllers;

use App\Models\Business;
use Illuminate\Http\Request;

class BusinessController extends Controller
{
    public function index()
    {
        $business = Business::create([
            'name' => 'Outro Usuário Qualquer',
            'email' => 'qualqueremailai@gmail.com',
            'address' => 'rua tal do bairro x'
        ]);

        dd($business);

//        $businesses = Business::all();
//        $business = Business::find(1);
//
//        $businessWhere = Business::where('name', 'LIKE', '%Davis%')->get();
//        $businessWhereFirst = Business::where('name', 'LIKE', '%Davis%')->first();
//
//        dd($business, $businesses, $businessWhere, $businessWhereFirst);
    }
}
