<?php

namespace App\Http\Controllers;

use App\applicants;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Validator;
use Illuminate\Support\Facades\Mail;
//use App\Mail\OrderShipped;
use App\Mail\TransferB1;
use App\Mail\Varios;
//use App\Mail\MessageReceived;


class ApplicantsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $opcion = $request->opcion;

        switch ($opcion) {

    case '1':
        //vallidamos los campos requeridos
        $validacion = Validator::make($request->all(), [
        'opcion' => 'required',
        'perfil' => 'required',
        'name' => 'required',
        'email' => 'required|email',
        'mobile' => 'required|numeric',
        'visa' => 'required',
        'licfed' => 'required',
        'resume' => 'file|mimes:pdf,doc,docx,|max:3072'],
        [
            'mobile.numeric' => 'Debe ser numerico/No incluir espacios o simbolos',
            'visa.required' => 'Debe seleccionar una opcion',
            'licfed.required' => 'Debe seleccionar una opcion',
            'resume.file' => 'debe ser un archivo con formato: pdf, doc, docx.',
        ]);
        //si la validacion falla
        if($validacion->fails()){
        //return redirect('/')->with('error','La informacion NO fue enviada')->withErrors($validacion->errors());
        return back()->withInput()->with('error','La informacion NO fue enviada')->withErrors($validacion->errors());
        }
        if($request->hasFile('resume')){
        $file= $request->file('resume');
        $filename = 'document-'.time().'.'.$file->getClientOriginalExtension();
        //almacena el archivo dentro de la carpeta public
        $path= $request->file('resume')->storeAs('public/applicants', $filename);
        //guardamos la info en BD
        $datos=request()->except('_token');        
        $datos = new applicants();
        $datos->name = $request->name;
        $datos->email = $request->email;
        $datos->mobile = $request->mobile;
        $datos->phone = $request->phone;
        $datos->visa = $request->visa;
        $datos->licfed = $request->licfed;
        $datos->resume = 'applicants/'.$filename;
        $datos->perfil = $request->perfil;
        $datos->opcion = $request->opcion;
        $datos->save();
        Mail::to('sistemas@autofleteshalcon.com')->send(new TransferB1($datos));
        return back()->with('info','Informacion enviada con exito!');
        }
        else{
        //si no hay archivo manda el campo en blanco
        $null="null";
        $datos=request()->except('_token');        
        $datos = new applicants();
        $datos->name = $request->name;
        $datos->email = $request->email;
        $datos->mobile = $request->mobile;
        $datos->phone = $request->phone;
        $datos->visa = $request->visa;
        $datos->licfed = $request->licfed;
        $datos->resume = $null;
        $datos->perfil = $request->perfil;
        $datos->opcion = $request->opcion;
        $datos->save();
        }
        Mail::to('sistemas@autofleteshalcon.com')->send(new TransferB1($datos));        
        return back()->with('info','Informacion enviada con exito!');
    break;

    case '2':
        //vallidamos los campos requeridos
        $validacion = Validator::make($request->all(), [
        'opcion' => 'required',
        'perfil' => 'required',
        'name' => 'required',
        'email' => 'required|email',
        'mobile' => 'required|numeric',
        'licfed' => 'required',
        'resume' => 'file|mimes:pdf,doc,docx,|max:3072'],
        [
            'mobile.numeric' => 'Debe ser numerico/No incluir espacios o simbolos',
            'licfed.required' => 'Debe seleccionar una opcion',
            'resume.file' => 'debe ser un archivo con formato: pdf, doc, docx.',
        ]);
        //si la validacion falla
        if($validacion->fails()){
        return back()->withInput()->with('error','La informacion NO fue enviada')->withErrors($validacion->errors());
        }
        if($request->hasFile('resume')){
        $file= $request->file('resume');
        $filename = 'document-'.time().'.'.$file->getClientOriginalExtension();
        //almacena el archivo dentro de la carpeta public
        $path= $request->file('resume')->storeAs('public/applicants', $filename);
        //guardamos la info en BD
        $datos=request()->except('_token');        
        $datos = new applicants();
        $datos->name = $request->name;
        $datos->email = $request->email;
        $datos->mobile = $request->mobile;
        $datos->phone = $request->phone;
        $datos->licfed = $request->licfed;
        $datos->resume = 'applicants/'.$filename;
        $datos->perfil = $request->perfil;
        $datos->opcion = $request->opcion;
        $datos->save();
        //dd($datos);
        Mail::to('sistemas01@autofleteshalcon.com')->send(new varios($datos));
        return back()->with('info','Informacion enviada con exito!');
        }
        else{
        //si no hay archivo manda el campo en blanco
        $null="null";
        $datos=request()->except('_token');        
        $datos = new applicants();
        $datos->name = $request->name;
        $datos->email = $request->email;
        $datos->mobile = $request->mobile;
        $datos->phone = $request->phone;
        $datos->licfed = $request->licfed;
        $datos->resume = $null;
        $datos->perfil = $request->perfil;
        $datos->opcion = $request->opcion;
        $datos->save();
        }
        Mail::to('sistemas01@autofleteshalcon.com')->send(new varios($datos));        
        return back()->with('info','Informacion enviada con exito!');        
    break;
    }
}



    /**
     * Display the specified resource.
     *
     * @param  \App\applicants  $applicants
     * @return \Illuminate\Http\Response
     */
    public function show(applicants $applicants)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\applicants  $applicants
     * @return \Illuminate\Http\Response
     */
    public function edit(applicants $applicants)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\applicants  $applicants
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, applicants $applicants)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\applicants  $applicants
     * @return \Illuminate\Http\Response
     */
    public function destroy(applicants $applicants)
    {
        //
    }
}
