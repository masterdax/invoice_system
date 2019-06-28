<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
	public function index()
	{
		return view('index');
	}


	public function about()
	{
		return view('about');//Route::get('/about','PageController@about');
	}

	public function contact()
	{
		return view('contact');//Route::get('/contact','PageController@contact');
	}

	public function gallery()
	{
		return view('gallery');//Route::get('/gallery','PageController@gallery');
	}

	public function product()
	{
		return view('products');//Route::get('/index','PageController@product');
	}

	

}
