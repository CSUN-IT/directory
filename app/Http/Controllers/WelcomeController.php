<?php namespace App\Http\Controllers;

class WelcomeController extends Controller {

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
	    $email = 'steven.fitzgerald@csun.edu';
	    if(env('APP_ENV') !== 'production')
	        $email = 'nr_'.$email;
		return view("pages.landing", compact('email'));
	}

	public function about()
    {
        return view('pages.about.version-history');
    }

}
