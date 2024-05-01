<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function index(Request $request){

//        return $request->session()->get('name');
//        return $request->session()->only(['name']);

        return session()->all();

    }

    public function set(Request $request ){

//        $query = $request->query();
//        session($query);
//        $request->session()->put($query);

//        session(['cars' => ['bmw', 'lexus', 'mercedes', 'ferrari']]);

        session()->push('cars','toyota');

        return 'sessions are set';
    }

    public function delete(){
//        foreach (session('cars') as $car){
//            if($car==='toyota'){
//                session()->forget($car);
//            }
//        }

        session()->put('cars', array_diff(session()->get('cars'), ['toyota']));

        return 'forgotten';
    }
}
