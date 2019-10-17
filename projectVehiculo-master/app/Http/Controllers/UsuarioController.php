<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;
class UsuarioController extends Controller
{
    public function index()
    {
        //
        $usuario=Usuario::all();
        return response()->json($usuario);
    }
    public function create()
    {

    }

    public function guardar(Request $request)
    {
        //
        Usuario::create($request->all());
        return 'se ha guardado';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
