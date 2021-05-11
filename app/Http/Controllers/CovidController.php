<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CovidController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function mongolian_data(){

        $ch = curl_init('https://ikon.mn/api/covid');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);

        $array = json_decode($result);
        $my_vars = array();

       
        $my_vars['confirmedNew'] = $array->confirmed->new;
        $my_vars['confirmedTotal'] = $array->confirmed->ttl;

        $my_vars['active'] = $array->active->ttl;

        $my_vars['recoveredNew'] = $array->recovered->new;
        $my_vars['recoveredTotal'] = $array->recovered->ttl;

        $my_vars['dotoodNew'] = $array->dotood->new;
        $my_vars['dotoodTotal'] = $array->dotood->ttl;

        $my_vars['pcrNew'] = $array->pcr->new;
        $my_vars['pcrTotal'] = $array->pcr->ttl;

        $my_vars['deathNew'] = $array->death->new;
        $my_vars['deathTotal'] = $array->death->ttl;

        $my_vars['oronNutag'] = $array->mapdata;

        return view('country')->with('my_vars', $my_vars);
    }
    public function index()
    {
        // дэлхийн мэдээлэлэ
        $ch = curl_init('https://api.covid19api.com/summary');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);

        $array = json_decode($result);
        $my_vars = array();
        
       
       
        $my_vars['NewConfirmed'] = $array->Global->NewConfirmed;
        $my_vars['TotalConfirmed'] = $array->Global->TotalConfirmed;
        $my_vars['TotalRecovered'] = $array->Global->TotalRecovered;
        $my_vars['TotalDeats'] = $array->Global->NewDeaths;
        

     
        return view('covid')->with('my_vars', $my_vars);

    }
    //  монгол улс  болон хөдөө орон нутаг
    public function country(){
         
        
        $ch = curl_init('https://ikon.mn/api/covid');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);

        $array = json_decode($result);


        $my_vars = array();

        $my_vars['country'] = $array->mapdata;

        return view('country')->with('my_vars', $my_vars);   
    }
    // Бүх улсын мэдээлэл
    public function create()
    {
        $ch = curl_init('https://api.covid19api.com/summary');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);

        $array = json_decode($result);


        $my_vars = array();

        $my_vars['allcountry'] = $array->Countries;

        return view('allcountry')->with('my_vars', $my_vars);
  
       
     }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
