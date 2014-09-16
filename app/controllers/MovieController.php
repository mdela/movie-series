<?php

class MovieController extends BaseController {

	public function get_index()
	{

        $movies = Movie::paginate(2);
		return View::make('site.movies.index')->with('movies',$movies);
	}

	public function get_create()
	{
		
		return View::make('site.movies.create');
	}

	public function get_update($id_pelicula)
	{
		$pelicula = Movie::find($id_pelicula);
		$pelicula->nombre = "Teminator genesis";
		$pelicula->duracion = "3 horas";
		$pelicula->save();
		return Redirect::to('pelicula');
	}

	public function post_save()
	{

		$movie = new Movie;
		$movie->nombre = Input::get('nombre');
		$movie->duracion = Input::get('duracion');
		$movie->save();
		return Redirect::to('movie');
	}

}
