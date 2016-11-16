<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListController extends Controller
{
    function index(){
      $persons=\DB::table('users')->get();
      return view('list', compact('persons'));
    }
}
