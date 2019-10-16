<?php

namespace App\Http\Controllers;

use App\applicants;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Validator;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderShipped;
use App\Mail\MessageReceived;


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
        //vallidamos los campos requeridos
        $validacion = Validator::make($request->all(), [
        'name' => 'required',
        'email' => 'required|email',
        'mobile' => 'required|numeric',
        'phone' => 'numeric',
        'resume' => 'file|mimes:pdf,doc,docx,|max:3072'],
        [
            'resume.file' => 'debe ser un archivo con formato: pdf, doc, docx.',
        ]);

        //si la validacion falla
        if($validacion->fails()){
            //mostrar el error
           //return back()->withErrors($validacion->errors());
        return redirect('/')->with('error','La informacion NO fue enviada')->withErrors($validacion->errors());
        }
        //almacena el archivo directamente con un nombre aleatorio
        //echo $request->file('resume')->store('applicants', 'public');

        if($request->hasFile('resume')){
        $file= $request->file('resume');
        $filename = 'document-'.time().'.'.$file->getClientOriginalExtension();
        //almacena el archivo en la carpeta
        $path= $request->file('resume')->storeAs('public/applicants', $filename);
        //guardamos la info en BD
        $datos=request()->except('_token');        
        $datos = new applicants();
        $datos->name = $request->name;
        $datos->email = $request->email;
        $datos->mobile = $request->mobile;
        $datos->phone = $request->phone;
        $datos->resume = 'applicants/'.$filename;
        $datos->save();
        //dd($datos);
        Mail::to('applicants@sitioweb.com')->send(new MessageReceived($datos));

        return redirect('/')->with('info','Informacion enviada con exito!');

        }
        else{
        //si no hay archivo manda el campo en blanco
        $null="";
        $datos=request()->except('_token');        
        $datos = new applicants();
        $datos->name = $request->name;
        $datos->email = $request->email;
        $datos->mobile = $request->mobile;
        $datos->phone = $request->phone;
        $datos->resume = $null;
        $datos->save();
        }
        
        return redirect('/')->with('info','Informacion enviada con exito!');

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
