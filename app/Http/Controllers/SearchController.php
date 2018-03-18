<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\library;
class SearchController extends Controller
{
    public function searchview()
    {	
    	//$libraries = library::all();
    	//return view('Search.search',['libraries' => $libraries]);
    	return view('Search.search');
    }
}
