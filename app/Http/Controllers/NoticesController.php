<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Provider;
use App\Http\Controllers\Controller;

class NoticesController extends Controller
{
	/**
	 *  Create a new notices controller instance
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 *  Show all notices in the project
	 */

    public function index()
	{
		return 'all notices';
	}

	/**
	 * Show a page to create a new notice
	 */

	public function create()
	{
		// get list of providers

		$providers = Provider::lists('name', 'id');

		// load a view to create a new notice

		return view('notices.create', compact('providers'));
	}

	public function confirm(Requests\PrepareNoticeRequest $request)
	{
		return $request->all();
	}


}
