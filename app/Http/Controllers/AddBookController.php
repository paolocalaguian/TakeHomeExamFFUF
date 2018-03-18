<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\library;

class AddBookController extends Controller
{
    public function addBook()
    {
    	return view('AddBook.addbook');
    }

    public function home()
    {
    	$libraries = library::all();
    	return view('Home.home',['libraries' => $libraries]);
    }

    public function insert(Request $request)
    {
    	$libraries = new library;
    	$libraries->title = $request->input('title');
    	$libraries->author = $request->input('author');
    	$libraries->genre = $request->input('genre');
    	$libraries->libsection = $request->input('libsection');
    	$libraries->status = $request->input('status');
    	$libraries->save();
    	return redirect('/home')->with('info','Book Added Successfully');
    }

    public function update($id)
    {
    	$libraries = library::find($id);
    	return view('AddBook.updatebook',['libraries' => $libraries]);
    }

    public function edit(Request $request ,$id)
    {
    	$data = array(
    		'title' => $request->input('title'),
    		'author' => $request->input('author'),
    		'genre' => $request->input('genre'),
    		'libsection' => $request->input('libsection'),
    		'status' => $request->input('status')
    	);
    	library::where('id',$id)->update($data);
    	return redirect('/home')->with('info','Book Updated Successfully');
    }

    public function delete(Request $request , $id)
    {
    	library::where('id',$id)->delete();
    	return redirect('/home')->with('info','Book Deleted Successfully');
    }
}
