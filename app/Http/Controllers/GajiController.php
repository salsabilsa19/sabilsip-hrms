<?php

namespace App\Http\Controllers;

use App\Models\Gaji;
use Illuminate\Http\Request;

class GajiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['gaji'] = Gaji::all();
        return view('admin.gaji.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.gaji.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
        'tanggal_gaji'  => 'required',
        'tunjangan'  => 'required',
        'potongan'  => 'required',
        'upah_lembur'  => 'required',
        'upah_gaji'  => 'required',
        ]);
      
        Gaji::create($request->all());

        return redirect()->route('admin.gaji.index');
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
    public function edit(Gaji $gaji)
    {
        return view('admin.gaji.edit', compact('gaji'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gaji $gaji)
    {
        $request->validate([
        'tanggal_gaji'  => 'required',
        'tunjangan'  => 'required',
        'potongan'  => 'required',
        'upah_lembur'  => 'required',
        'upah_gaji'  => 'required',
        ]);
      
        $gaji->update($request->all());

        return redirect()->route('admin.gaji.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gaji $gaji)
    {
        $gaji->delete();

        return redirect()->route('admin.gaji.index');
    }
}