<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{

    public function index()
{
return "salutare lume";
//return view('welcome');
}

public function contact()
{
return "conatcteaza-ma";
}

// enunt 2
    public function about()
    {
        return view('about');
    }
    public function contactp()
    {
        return view('contactp');
    }

// enunt 3
    public function despre(){
        $name="Fiscalitatea astazi";
        return view('despre')->with('name',$name);
    }


    public function despresir(){
//variabila de tip array care se trimit la view
        return view('despresir')->with(['name'=>"Pop", 'prenume'=>"Filimon"]);
    }

    public function main()
    {
        return view('main');
    }


}
