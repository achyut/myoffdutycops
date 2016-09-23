<?php

class UsersController extends BaseController {

	/**
	 * User Repository
	 *
	 * @var User
	 */
	protected $user;

	public function __construct(User $user)
	{
		$this->user = $user;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$users = $this->user->all();

		return View::make('backend.users.index', compact('users'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('backend.users.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, User::$rules);

		if ($validation->passes())
		{
			$input['password'] = Hash::make($input['password']);
			$this->user->create($input);

			return Redirect::route('users.index');
		}

		return Redirect::route('users.create')
		->withInput()
		->withErrors($validation)
		->with('message', 'There were validation errors.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$user = $this->user->findOrFail($id);

		return View::make('backend.users.show', compact('user'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$user = $this->user->find($id);

		if (is_null($user))
		{
			return Redirect::route('users.index');
		}

		return View::make('backend.users.edit', compact('user'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$input = array_except(Input::all(), '_method');
		$validation = Validator::make($input, User::$rules);

		if ($validation->passes())
		{
			$user = $this->user->find($id);
			$input['password'] = Hash::make($input['password']);
			$user->update($input);

			return Redirect::route('users.show', $id);
		}

		return Redirect::route('users.edit', $id)
		->withInput()
		->withErrors($validation)
		->with('message', 'There were validation errors.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$this->user->find($id)->delete();

		return Redirect::route('users.index');
	}


	public function getLogin()
	{
		if (Auth::guest())
		{
			return View::make('frontend.login');	
		}
		else{
			return Redirect::to('requestservices');
		}
		
	}

	public function doLogin()
	{
	// validate the info, create rules for the inputs
		$rules = array(
	    'email'    => 'required|email', // make sure the email is an actual email
	    'password' => 'required|min:3' // password can only be alphanumeric and has to be greater than 3 characters
	    );

	// run the validation rules on the inputs from the form
			$validator = Validator::make(Input::all(), $rules);

	// if the validator fails, redirect back to the form
		if ($validator->fails()) {
				return Redirect::to('login')
	        ->withErrors($validator) // send back all errors to the login form
	        ->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
	    } else {

	    // create our user data for the authentication
	    	$userdata = array(
	    		'email'     => Input::get('email'),
	    		'password'  => Input::get('password')
	    		);

	    // attempt to do the login
	    	if (Auth::attempt($userdata)) {

	        // validation successful!
	        // redirect them to the secure section or whatever
	        // return Redirect::to('secure');
	        // for now we'll just echo success (even though echoing in a controller is bad)
	    		return Redirect::to('requestservices');

	    	} else {        

	        // validation not successful, send back to form 
	    		return Redirect::to('login')->withErrors(array('invalid' => "Invalid Login credentials."))->withInput(Input::except('password'));;
	    	}

	    }
	}

	public function doLogout()
	{
	    Auth::logout(); // log the user out of our application
	    return Redirect::to('login'); // redirect the user to the login screen
	}
}