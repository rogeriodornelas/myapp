<?php

namespace App\Http\Controllers;

use App\Models\Business;
use Illuminate\Http\Request;

class BusinessController extends Controller
{
    public function index()
    {
        $businesses = Business::all();
        $business = Business::find(1);

        $businessWhere = Business::where('name', 'LIKE', '%Davis%')->get();
        $businessWhereFirst = Business::where('name', 'LIKE', '%Davis%')->first();

        dd($business, $businesses, $businessWhere, $businessWhereFirst);
    }
}
