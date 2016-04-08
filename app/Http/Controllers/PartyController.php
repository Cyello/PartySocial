<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

//use App\Http\Requests;

use App\Evento;

use Request;

class PartyController extends Controller
{



    public function __construct()
    {
        $this->middleware('meu-midd',
        ['only' => ['create', 'destroy', 'edit']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eventos = Evento::all();
        return view('eventos.home')->with('eventos', $eventos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('eventos.form_evento');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $param = Request::all();

        $evento = new Evento($param);

        $evento->save();

        return redirect('/party');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $novo_evento = Evento::find($id);
        return view("eventos.form_edita_evento")->with('novo_evento', $novo_evento);
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
        $evento = Evento::find($id);
        $evento->nome = Request::input('nome');
        $evento->descricao = Request::input('descricao');
        $evento->save();
        return redirect()->action('PartyController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $evento = Evento::find($id);
        $evento->delete();

        return redirect()->action('PartyController@index');
    }
}
