<?php

namespace App\Http\Controllers;

use App\Models\Business;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class BusinessController extends Controller
{
    public function index()
    {
        $businesses = Business::all();
        return view('businesses', compact('businesses'));

//        $business = Business::where('email', 'LIKE','%example%')->get();
//        dd($business->toArray());

        //deletando registros
//        $business = Business::find(5);
//        $business->delete();
//        dd($business);

        //update usando request (tem que ter o request no param da funcao)
//        $request = $request->all(); //array com o request
//        $business = Business::find(5);
//        $business->fill($request);
//        $business->save();
//        dd($business);


//        // a função update retorna true
//        $business = Business::find(5)->update([
//            'name'=>'Nome atualizado pela segunda vez',
//            'email' => 'emailsegundaatt@gmail.com',
//            'address' => 'novo endereço'
//        ]);


        //Essa é uma forma de atualizar os registros
//        $business = Business::find(5);
//        $business->name = 'Nome Atualizado';
//        $business->email = 'Email atualizado';
//        $business->save(); //essa função salva os registros no banco


        // Assim é possível adicinar registros na tabela
//        $business = Business::create([
//            'name' => 'Outro Usuário Qualquer',
//            'email' => 'qualqueremailai@gmail.com',
//            'address' => 'rua tal do bairro x'
//        ]);

//        $businesses = Business::all();
//        $business = Business::find(1);
//
//        $businessWhere = Business::where('name', 'LIKE', '%Davis%')->get();
//        $businessWhereFirst = Business::where('name', 'LIKE', '%Davis%')->first();
//
//        dd($business, $businesses, $businessWhere, $businessWhereFirst);
    }

    public function store(Request $request)
    {
        $input = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'address' => 'string'
        ]);

        $business = Business::create($input);

        return Redirect::route('businesses.index');
    }
}
