<?php

namespace App\Http\Controllers;

 use Illuminate\Http\Request;

class PetController extends Controller
{
    //
    function savePet(Request $request){
//        Fill a new Pet instance and save to DB
        // $pet = new Pet();
        // pet -> name = request( 'name' )
        // ...
        // save to DB

        return response('Pet Created !!',201);
    }

    function showRegistration(){
        return view('welcome');

    }
}
