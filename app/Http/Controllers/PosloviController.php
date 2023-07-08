<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Poslovi;
use Illuminate\View\View;

class PosloviController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $poslovi = Poslovi::all();
        return view ('poslovi.index')->with('poslovi', $poslovi);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('poslovi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        Poslovi::create($input);
        return redirect('poslovi/create')->with('flash_message', 'Posao je dodat!');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): View
    {
        $poslovi = Poslovi::all();
        return view('poslovi.show')->with('poslovi', $poslovi);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $poslovi = Poslovi::find($id);
        return view('poslovi.edit')->with('poslovi', $poslovi);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $poslovi = Poslovi::find($id);
        $input = $request->all();
        $poslovi->update($input);
        return redirect('poslovi')->with('flash_message', 'Poslovi su updateovani!');  

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        Poslovi::destroy($id);
        return redirect('poslovi/show')->with('flash_message', 'Posao je obrisan!');

    }
}
