<?php

namespace App\Http\Controllers;

use App\Models\Asignation;
use Illuminate\Http\Request;

/**
 * Class AsignationController
 * @package App\Http\Controllers
 */
class AsignationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $asignations = Asignation::paginate();

        return view('asignation.index', compact('asignations'))
            ->with('i', (request()->input('page', 1) - 1) * $asignations->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $asignation = new Asignation();
        return view('asignation.create', compact('asignation'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Asignation::$rules);

        $asignation = Asignation::create($request->all());

        return redirect()->route('asignations.index')
            ->with('success', 'Asignation created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $asignation = Asignation::find($id);

        return view('asignation.show', compact('asignation'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $asignation = Asignation::find($id);

        return view('asignation.edit', compact('asignation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Asignation $asignation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Asignation $asignation)
    {
        request()->validate(Asignation::$rules);

        $asignation->update($request->all());

        return redirect()->route('asignations.index')
            ->with('success', 'Asignation updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $asignation = Asignation::find($id)->delete();

        return redirect()->route('asignations.index')
            ->with('success', 'Asignation deleted successfully');
    }
}
