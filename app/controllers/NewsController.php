<?php

class NewsController extends BaseController {

	/**
	 * News Repository
	 *
	 * @var News
	 */
	protected $news;

	public function __construct(News $news)
	{
		$this->news = $news;
	}

	public function allnews()
	{
		/*$news = array();
		$data = $this->news->all();

		foreach ($data as $row) {
			$news[] = $row;
		}*/
		/*
		for ($i=0; $i < count($data); $i++) { 
			$news[] = $data[$i];
		}
*/
		//$users = DB::table('users')->paginate(15);
		$news = $this->news->paginate(6);
		return View::make('frontend.news', compact('news'));
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$news = $this->news->all();

		return View::make('backend.news.index', compact('news'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('backend.news.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, News::$rules);

		if ($validation->passes())
		{
			$this->news->create($input);

			return Redirect::route('news.index');
		}

		return Redirect::route('news.create')
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
		 
		$news = $this->news->findOrFail($id);
		$previous =$this->news->where('id', '<', $id)->max('id');
	    $next =$this->news->where('id', '>', $id)->min('id');
		return View::make('backend.news.show', compact('news','previous','next'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$news = $this->news->find($id);

		if (is_null($news))
		{
			return Redirect::route('news.index');
		}

		return View::make('backend.news.edit', compact('news'));
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
		$validation = Validator::make($input, News::$rules);

		if ($validation->passes())
		{
			$news = $this->news->find($id);
			$news->update($input);

			return Redirect::route('news.show', $id);
		}

		return Redirect::route('news.edit', $id)
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
		$this->news->find($id)->delete();

		return Redirect::route('news.index');
	}

}
