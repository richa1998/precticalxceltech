<?php

namespace App\Http\Controllers;

use App\Models\curd;
use Illuminate\Http\Request;

class CurdController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = curd::all();
        return view('curds.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('curds.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $contact = curd::create($request->all());

        return redirect()->route('curd.index')->with('success', 'Contact created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(curd $curd)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(curd $curd)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, curd $curd)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(curd $curd)
    {
        //
    }
}
