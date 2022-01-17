<?php

namespace App\Http\Controllers;

use App\Models\funder;
use App\Http\Requests\StorefunderRequest;
use App\Http\Requests\UpdatefunderRequest;
use Illuminate\Http\Request;



class FunderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_funder = Funder::all();
        return view('funder.index', compact('data_funder'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('funder.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorefunderRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorefunderRequest $request)
    {
        
        Funder::query()->create([
            'name' => $request->name,
            'date_of_birth' => $request->date_of_birth,
            'place_of_birth' => $request->place_of_birth,
            'phone' => $request->phone,
            'email' => $request->email,
            'address' => $request->address,
            'notes' => $request->notes,
        ]);

        return redirect()->route('funder.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\funder  $funder
     * @return \Illuminate\Http\Response
     */
    public function show(funder $funder)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\funder  $funder
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $funder = \App\Models\Funder::find($id);
        return view('funder.edit', ['funder' =>$funder]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatefunderRequest  $request
     * @param  \App\Models\funder  $funder
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $funder = \App\Models\Funder::find($id);
        $funder->Update($request->all());
        return redirect('/funder')->with('sukses','Data berhasil diupdate');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\funder  $funder
     * @return \Illuminate\Http\Response
     */
    public function destroy(funder $funder)
    {
        $funder->delete();
        return redirect()->route('funder.index');
    }
}
