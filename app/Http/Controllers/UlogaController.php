<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Uloga;
use Illuminate\View\View;


class UlogaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $uloga = Uloga::all();
        return view ('uloga.index')->with('uloga', $uloga);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('uloga.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        Uloga::create($input);
        return redirect('uloga')->with('flash_message', 'Uloga je dodata!');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): View
    {
        $uloga = Uloga::find($id);
        return view('uloga.show')->with('uloga', $uloga);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $uloga = Uloga::find($id);
        return view('uloga.edit')->with('uloga', $uloga);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $uloga = Uloga::find($id);
        $input = $request->all();
        $uloga->update($input);
        return redirect('uloga')->with('flash_message', 'Uloge su updateovane!');  

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        Uloga::destroy($id);
        return redirect('uloga')->with('flash_message', 'Uloga je obrisana!');

    }
}
