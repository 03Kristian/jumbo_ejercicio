<?php

namespace App\Http\Controllers;

use App\Models\Group_time;
use Illuminate\Http\Request;

class GroupTimeController extends Controller
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
        return view('Time_group.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $time = new Group_time();
        $time->hora_lunes = $request->lunes;
        $time->hora_martes = $request->martes;
        $time->hora_miercoles = $request->miercoles;
        $time->hora_jueves = $request->jueves;
        $time->hora_viernes = $request->viernes;

        $time->save();

        return 'Nuevo horario establecido con exito';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Group_time  $group_time
     * @return \Illuminate\Http\Response
     */
    public function show(Group_time $group_time)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Group_time  $group_time
     * @return \Illuminate\Http\Response
     */
    public function edit(Group_time $group_time)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Group_time  $group_time
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Group_time $group_time)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Group_time  $group_time
     * @return \Illuminate\Http\Response
     */
    public function destroy(Group_time $group_time)
    {
        //
    }
}
