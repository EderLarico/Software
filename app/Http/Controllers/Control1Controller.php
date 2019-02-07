<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Control1;

class Control1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $controles=Control1::all();
        return view('control1.index',compact('controles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('control1.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $control = new Control1();
        $control->jefeInformatica = $request->get('jefeInformatica');
        $control->comiteResponsable =$request->get('comiteResponsable');
        $control->cargo = $request->get('cargo');
        $control->sedeOrganizacion =$request->get('sedeOrganizacion');
        $control->area= $request->get('area');
        $control->responsableArea =$request->get('responsableArea');
        $control->sistema =$request->get('sistema');
        $control->politicasAcceso =$request->get('politicasAcceso');
        $control->usuarios =$request->get('usuarios');
        $control->perfil= $request->get('perfil');
        $control->apellidosNombres =$request->get('apellidosNombres');
        $control->save();

        return redirect('/control1')->with('success', 'Control Agregado satisfactoriamente');
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
        $control = Control1::find($id);
        return view('control1.edit',compact('control','id'));
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
        $control = Control1::find($id);;
        $control->jefeInformatica = $request->get('jefeInformatica');
        $control->comiteResponsable =$request->get('comiteResponsable');
        $control->cargo = $request->get('cargo');
        $control->sedeOrganizacion =$request->get('sedeOrganizacion');
        $control->area= $request->get('area');
        $control->responsableArea =$request->get('responsableArea');
        $control->sistema =$request->get('sistema');
        $control->politicasAcceso =$request->get('politicasAcceso');
        $control->usuarios =$request->get('usuarios');
        $control->perfil= $request->get('perfil');
        $control->apellidosNombres =$request->get('apellidosNombres');
        $control->save();

        return redirect('/control1')->with('success', 'Control Actualizado satisfactoriamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $control = Control1::find($id);
        $control->delete();
        return redirect('/control1')->with('success','Control correctamente eliminado');
    }
}
