<?php

namespace App\Http\Controllers;

use App\Models\nurseries;
use App\Http\Requests\StorenurseriesRequest;
use App\Http\Requests\UpdatenurseriesRequest;
use Illuminate\Http\Request;

class NurseriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_nurseries = Nurseries::all();
        return view('nurseries.index', compact('data_nurseries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('nurseries.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorenurseriesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorenurseriesRequest $request)
    {
        Nurseries::query()->create([
            'name' => $request->name,
            'head_of_company' => $request->head_of_company,
            'address' => $request->address,
            'phone' => $request->phone,
            'email' => $request->email,
            'fax' => $request->fax,
            'web' => $request->web,
            'bank_accountno' => $request->bank_accountno,
            'area' => $request->area,
            'monthly_omzet' => $request->monthly_omzet,
            'total_capacity' => $request->total_capacity,
            'permanent_emp'=> $request->permanent_emp,
            'non_permanent_emp'=> $request->non_permanent_emp,
            'potency'=> $request->potency,
            'is_verified'=> $request->is_verified,
            'existing_land'=> $request->existing_land,
            'developing_land'=> $request->developing_land,
            'notes'=> $request->notes,
        ]);

        return redirect()->route('nurseries.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\nurseries  $nurseries
     * @return \Illuminate\Http\Response
     */
    public function show(nurseries $nurseries)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\nurseries  $nurseries
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $nurseries = \App\Models\Nurseries::find($id);
        return view('nurseries.edit', ['nurseries' =>$nurseries]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatenurseriesRequest  $request
     * @param  \App\Models\nurseries  $nurseries
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $nurseries = \App\Models\Nurseries::find($id);
        $nurseries->Update($request->all());
        return redirect('/nurseries')->with('sukses','Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\nurseries  $nurseries
     * @return \Illuminate\Http\Response
     */
    public function destroy(nurseries $nurseries)
    {
        $nurseries->delete();
        return redirect()->route('nurseries.index');
    }
}
