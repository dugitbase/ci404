<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('welcome_message');
	}

	//--------------------------------------------------------------------
	public function coba()
	{
		// echo "Hallo Apa kabar?... ini tampilan coba";
		return view('hallo');
	}
}
