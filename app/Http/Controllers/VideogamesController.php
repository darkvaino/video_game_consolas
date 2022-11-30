<?php

namespace App\Http\Controllers;

use App\Models\VideoGameConsole;
use Illuminate\Http\Request;

class VideogamesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //1 index
        return view('video_game.index', [
            'video_game' => VideoGameConsole::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('video_game.create');
    }

    public function store(Request $request)
    {
        //Visualizar todos los parámetros que llegan a través de la petición
        //dd($request->all());

        //Crear un nuevo objeto de tipo estudiante
        $videogame = new VideoGameConsole();

        //Asignar valores a los atributos del objeto
        $videogame->reference = $request->get('reference');
        $videogame->number_of_controllers = $request->get('number_of_controllers');
        $videogame->is_especial_edition = $request->get('is_especial_edition');
        $videogame->release_year = $request->get('release_year');


        //Almacenar el registro en la BD
        $videogame->save();

        //Redireccionar
        return redirect('/video_game'); //url web.php
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($request)
    {
        return view('video_game.show', [
            'video_game' => VideoGameConsole::findOrFail($request)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $videogame = VideoGameConsole::findOrFail($id);
        //dd($student);

        return view('video_game.edit', [
            'video_game' => $videogame
        ]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Visualizar todos los parámetros que llegan a través de la petición
        //dd($request->all());

        //Crear un nuevo objeto de tipo estudiante
        $videogame = VideoGameConsole::findOrFail($id);

        //Asignar valores a los atributos del objeto
        $videogame->reference = $request->get('reference');
        $videogame->number_of_controllers = $request->get('number_of_controllers');
        $videogame->is_especial_edition = $request->get('is_especial_edition');
        $videogame->release_year = $request->get('release_year');


        //Almacenar el registro en la BD
        $videogame->save();

        //Redireccionar
        return redirect('/video_game'); //url web.php
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $video_game = VideoGameConsole::findOrFail($id);

        $video_game->delete();

        return back();
    }

}
