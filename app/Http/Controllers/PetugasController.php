<?php

namespace App\Http\Controllers;

use App\Models\Petugas;
use Illuminate\Http\Request;

class PetugasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Petugas::all();

        return view('pages.admin.petugas.index', [
            'data'=> $data,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.petugas.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Petugas::create($request->all());

        return redirect()->route('data-petugas');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
