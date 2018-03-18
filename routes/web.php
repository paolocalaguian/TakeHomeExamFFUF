<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use Illuminate\Support\Facades\Input;
use App\library;
//crud book
Route::get('/home', 'AddBookController@home');//homepage display books
Route::get('/create', 'AddBookController@addBook');//create book
Route::post('/insert', 'AddBookController@insert');//insert to dbase
Route::get('/update/{id}', 'AddBookController@update');//get data dbase
Route::post('/edit/{id}', 'AddBookController@edit');//update to dbase
Route::get('/delete/{id}', 'AddBookController@delete');//delete data to dbase
//return book
Route::get('/return', 'ReturnBookController@returnhome');
Route::get('/edit2/{id}', 'ReturnBookController@edit');//update to dbase
Route::get('/edit3/{id}', 'ReturnBookController@edit3');//update to dbase
//search book
Route::get('/searchview', 'SearchController@searchview');
Route::post('/search', function()
{
	$search = input::get('search');
	if($search !=' ')
	{
		$libraries = library::where('title','LIKE','%' . $search . '%')
						->orwhere('author','LIKE','%' . $search .'%')
						->orwhere('genre','LIKE','%' . $search .'%')
						->orwhere('libsection','LIKE','%' . $search .'%')
						->get();
		if(count($libraries)>0)
			return view('Search.search')->withDetails($libraries)->withQuery($search);
	}
	return view('Search.search')->withDetails($libraries)->withQuery($search);
});

//about
Route::get('/about', function()
{
	return view('About.about');
});
