<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\library;

class ReturnBookController extends Controller
{
    public function returnhome()
    {
    	$libraries = library::all();
    	return view('ReturnBook.return',['libraries' => $libraries]);
    }

    public function edit(Request $request ,$id)
    {
    	$stat = "Available";
    	$data = array(
    		'status' => $stat
    	);
    	library::where('id',$id)->update($data);
    	return redirect('/return')->with('info','Book Returned Successfully');
    }

    public function edit3(Request $request ,$id)
    {
    	$stat = "Unavailable";
    	$data = array(
    		'status' => $stat
    	);
    	library::where('id',$id)->update($data);
    	return redirect('/home')->with('info','Book Borrowed Successfully');
    }
}
