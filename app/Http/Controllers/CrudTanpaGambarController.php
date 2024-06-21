<?php

namespace App\Http\Controllers;

use App\Models\CrudTanpaGambar;
use Illuminate\Http\Request;

class CrudTanpaGambarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $crud = CrudTanpaGambar::all();
        return view('CrudTanpaGambar.index', compact('crud'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('CrudTanpaGambar.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'slug' => 'nullable',
        ]);

        CrudTanpaGambar::create($request->all());

        return redirect()->route('CrudTanpaGambar.index')->with('success', 'Item created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $crud = CrudTanpaGambar::find($id);
        return view('CrudTanpaGambar.edit', compact('crud'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
            'slug' => 'nullable',
        ]);
        $crud = CrudTanpaGambar::find($id);
        $crud->update($request->all());
        return redirect()->route('CrudTanpaGambar.index')->with('success', 'Item updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $crud = CrudTanpaGambar::find($id)->delete();
        return redirect()->route('CrudTanpaGambar.index')->with('success', 'Item deleted successfully.');
    }
}
