<?php

class PolicesignupsController extends BaseController {

	/**
	 * Policesignup Repository
	 *
	 * @var Policesignup
	 */
	protected $policesignup;

	public function __construct(Policesignup $policesignup)
	{
		$this->policesignup = $policesignup;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$policesignups = $this->policesignup->all();

		return View::make('backend.policesignups.index', compact('policesignups'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('frontend.policesignup');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Policesignup::$rules);

		if ($validation->passes())
		{
			$data = $this->policesignup->create($input);
			$input["created_at"] = $data->created_at;

			/*
			Mail::send('emails.policesignup', $input, function($message) {
			    $message->to('achyut@mailinator.com', 'Police Signed up')->subject('Police Signed up by '.Input::get('fname')." ".Input::get('lname'));
			});
			
			*/
			return Redirect::route('policesignup')->with('successmessage',Lang::get('messages.policesignupsuccess'));
		}

		return Redirect::route('policesignup')
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
		$policesignup = $this->policesignup->findOrFail($id);

		return View::make('backend.policesignups.show', compact('policesignup'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$policesignup = $this->policesignup->find($id);

		if (is_null($policesignup))
		{
			return Redirect::route('policesignups.index');
		}

		return View::make('backend.policesignups.edit', compact('policesignup'));
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
		$validation = Validator::make($input, Policesignup::$rules);

		if ($validation->passes())
		{
			$policesignup = $this->policesignup->find($id);
			$policesignup->update($input);

			return Redirect::route('policesignups.show', $id);
		}

		return Redirect::route('policesignups.edit', $id)
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
		$this->policesignup->find($id)->delete();

		return Redirect::route('policesignups.index');
	}

}
