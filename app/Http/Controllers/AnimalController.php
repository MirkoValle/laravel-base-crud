<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $animals = Animal::all();
        return view('pages.home', compact("animals"));
    }

    /**
     * Display the specified resource.
     */
    public function show(Animal $animal)
    {
        return view('pages.show', compact("animal"));
    }

    public function create()
    {
        return view('pages.create');
    }


    public function store(Request $request)
    {
        $data = $request->All();

        $newAnimal = Animal::create($data);
        return redirect()->route('animals.show', $newAnimal);
    }








    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Animal $animal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Animal $animal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Animal $animal)
    {
        //
    }
}