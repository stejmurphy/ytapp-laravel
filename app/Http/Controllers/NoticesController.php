<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class NoticesController extends Controller
{
    public function index()
	{
		return 'all notices';
	}

	public function create()
	{
		// get list of providers


		// load a view to create a new notice

		return view('notices.create');
	}


}
