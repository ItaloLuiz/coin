<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
  
    public function index()
    {
        $moedas = DB::table('tbl_coins')->paginate(15);
        return view('home', ['moedas' => $moedas]);
    }
   
}
