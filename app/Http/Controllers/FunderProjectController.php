<?php

namespace App\Http\Controllers;

use App\Models\FunderProject;
use App\Http\Requests\StoreFunderProjectRequest;
use App\Http\Requests\UpdateFunderProjectRequest;
use Illuminate\Http\Request;


class FunderProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_funder_project = Funderproject::all();
        return view('funder_project.index', compact('data_funder_project'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('funder_project.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreFunderProjectRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFunderProjectRequest $request)
    {
        FunderProject::query()->create([
            'total_fund' => $request->total_fund,
            'benefit' => $request->benefit,
            'fixfund' => $request->fixfund,
            'permanent_fund' => $request->permanent_fund,
            'temporary_fund' => $request->temporary_fund,
            'count_temporary_fund' => $request->count_temporary_fund,
            'notes' => $request->notes,
        ]);

        return redirect()->route('funder_project.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FunderProject  $funderProject
     * @return \Illuminate\Http\Response
     */
    public function show(FunderProject $funderProject)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FunderProject  $funderProject
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $funder_project = \App\Models\FunderProject::find($id);
        return view('funder_project.edit', ['funder_project' =>$funder_project]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFunderProjectRequest  $request
     * @param  \App\Models\FunderProject  $funderProject
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $funder_project = \App\Models\FunderProject::find($id);
        $funder_project->Update($request->all());
        return redirect('/funder_project')->with('sukses','Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FunderProject  $funderProject
     * @return \Illuminate\Http\Response
     */
    public function destroy(FunderProject $funderProject)
    {
        $funderProject->delete();
        return redirect()->route('funder_project.index');
    }
}
