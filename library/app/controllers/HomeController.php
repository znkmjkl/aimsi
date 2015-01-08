<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	|
	|
	|	public function showWelcome()
	|	{
	|		return View::make('hello');
	|	}
	|
	*/

	public function getIndex()
	{
		return View::make('home.index');
	}

	public function getAbout()
	{
		return View::make('home.about');
	}

	public function getHelp()
	{
		return View::make('home.help');
	}

	public function getContact()
	{
		return View::make('home.contact');
	}

	public function getStatus()
	{
		return View::make('home.status');
	}

	public function getTerms()
	{
		return View::make('home.terms');
	}

}
