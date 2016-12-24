<?php

use Illuminate\Support\Collection;

class RequestservicesController extends BaseController {

	/**
	 * Requestservice Repository
	 *
	 * @var Requestservice
	 */
	protected $requestservice;

	public function __construct(Requestservice $requestservice)
	{
		$this->requestservice = $requestservice;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$requestservices = $this->requestservice->all();

		return View::make('backend.requestservices.index', compact('requestservices'));
	}

	
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('frontend.requestservice');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		
		$validation = Validator::make($input, Requestservice::$rules);

		if ($validation->passes())
		{
			$input["status"] = "PENDING";
			$data = $this->requestservice->create($input);
			$input["created_at"] = $data->created_at;

			/*
			Mail::send('emails.requestservice', $input, function($message) {
			    $message->to('achyut@mailinator.com', 'Request service')->subject('Requested service by '.Input::get('fullname'));
			});
			*/

			return Redirect::route('requestservice')->with('successmessage',Lang::get('messages.requestservicesuccess'));
		}

		return Redirect::route('requestservices')
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
		$requestservice = $this->requestservice->findOrFail($id);

		return View::make('backend.requestservices.show', compact('requestservice'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$requestservice = $this->requestservice->find($id);

		if (is_null($requestservice))
		{
			return Redirect::route('requestservices.index');
		}

		return View::make('backend.requestservices.edit', compact('requestservice'));
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
		$validation = Validator::make($input, Requestservice::$rules);

		if ($validation->passes())
		{
			$requestservice = $this->requestservice->find($id);
			$requestservice->update($input);

			return Redirect::route('requestservices.show', $id);
		}

		return Redirect::route('requestservices.edit', $id)
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
		$this->requestservice->find($id)->delete();

		return Redirect::route('requestservices.index');
	}

	public function getNearbyPoliceOfficers($id)
	{
		$policesignup = $this->requestservice->getNearByPoliceOfficers($id);
		$collection =  new Collection($policesignup);
		$policesignups = $collection->sortBy('distancetojob');

		//return $policesignups;
		return View::make('backend.requestservices.nearby', compact('policesignups','id'));
	}

	public function notify($jobid,$officerid)
	{
		$job = $this->requestservice->findOrFail($jobid);
		$officer = Policesignup::findOrFail($officerid);
		
	}

	public function notifyAll()
	{
		$input = Input::all();
		dd($input);
	}


	public function sendNotification($job,$officer)
	{
		
		Mail::send('emails.jobfound', $job, function($message) {
		    $message->to($officer->email, 'New Job found matching your profile')->subject('New Job found matching your profile in your locality');
		});
			
	}
}
