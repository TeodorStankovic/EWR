<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Ekspoziture;
use Illuminate\View\View;

class EkspozitureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $ekspozitura = Ekspoziture::all();
        return view ('ekspozitura.index')->with('ekspozitura', $ekspozitura);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('ekspozitura.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        Ekspoziture::create($input);
        return redirect('ekspozitura')->with('flash_message', 'ekspozitura Dodata!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): View
    {
        $ekspozitura = Ekspoziture::find($id);
        return view('ekspozitura.show')->with('ekspozitura', $ekspozitura);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $ekspozitura = Ekspoziture::find($id);
        return view('ekspozitura.edit')->with('ekspozitura', $ekspozitura);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $ekspozitura = Ekspoziture::find($id);
        $input = $request->all();
        $ekspozitura->update($input);
        return redirect('ekspozitura')->with('flash_message', 'ekspozitura Updejtovan!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        Ekspoziture::destroy($id);
        return redirect('ekspozitura')->with('flash_message', 'ekspozitura obrisana!');
    }
}
