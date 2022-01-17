<?php

namespace App\Http\Controllers;

use App\Models\Instantion;
use App\Http\Requests\StoreInstantionRequest;
use App\Http\Requests\UpdateInstantionRequest;
use Illuminate\Http\Request;


class InstantionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_instantion = Instantion::all();
        return view('instantion.index', compact('data_instantion'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('instantion.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreInstantionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreInstantionRequest $request)
    {
        Instantion::query()->create([
            'name' => $request->name,
            'head_of_company' => $request->head_of_company,
            'phone' => $request->phone,
            'email' => $request->email,
            'address' => $request->address,
            'plafond' => $request->plafond,
            'source' => $request->source,
            
        ]);

        return redirect()->route('instantion.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Instantion  $instantion
     * @return \Illuminate\Http\Response
     */
    public function show(Instantion $instantion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Instantion  $instantion
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $instantion = \App\Models\Instantion::find($id);
        return view('instantion.edit', ['instantion' =>$instantion]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateInstantionRequest  $request
     * @param  \App\Models\Instantion  $instantion
     * @return \Illuminate\Http\Response
     */
    
    public function update(Request $request, $id)
    {
        $instantion = \App\Models\Instantion::find($id);
        $instantion->Update($request->all());
        return redirect('/instantion')->with('sukses','Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Instantion  $instantion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Instantion $instantion)
    {
        $instantion->delete();
        return redirect()->route('instantion.index');
    }
    
}
