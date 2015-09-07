<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Provider;
use App\Http\Controllers\Controller;
use Illuminate\Auth\Guard;

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
	 *
	 * @return \Response
	 *
	 */

	public function create()
	{
		// get list of providers

		$providers = Provider::lists('name', 'id');

		// load a view to create a new notice

		return view('notices.create', compact('providers'));
	}

	/**
	 * Ask the user to confirm the DMCA that will be delivered
	 * @param Requests\PrepareNoticeRequest $request
	 * @param Guard $auth
	 * @return \Responce
	 */

	public function confirm(Requests\PrepareNoticeRequest $request, Guard $auth)
	{

		$template = $this->compiledDmcaTemplate($data = $request->all(), $auth);

		session()->flash('dmca', $data);

		$template = view()->file(app_path('Http/Templates/dmca.blade.php'));

		return view('notices/confirm', compact('template'));
	}


	/**
	 * @return mixed
	 */
	public function store()
	{
		// $data = session()->get('dmca');

		// return \Request::input('template');

		
	}


	/**
	 *
	 * Compile the DMCA template from the form data
	 * @param $data
	 * @param Guard $auth
	 * @return mixed
	 */

	public function compiledDmcaTemplate($data, Guard $auth)
	{
		$data = $data + [

				'name' 	=> $auth->user()->name,
				'email' => $auth->user()->email,
			];
		return view()->file(app_path('Http/Templates/dmca.blade.php'), $data);
	}


}
