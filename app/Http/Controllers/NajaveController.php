<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Najave;
use Illuminate\View\View;

class NajaveController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $najave = Najave::all();
        return view ('najave.index')->with('najave', $najave);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('najave.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        Najave::create($input);
        return redirect('najave/create')->with('flash_message', 'najave Dodata!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): View
    {
        $najave = Najave::all();
        return view('najave.show')->with('najave', $najave);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $najave = Najave::find($id);
        return view('najave.edit')->with('najave', $najave);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $najave = Najave::find($id);
        $input = $request->all();
        $najave->update($input);
        return redirect('najave/show')->with('flash_message', 'najave Updejtovan!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        Najave::destroy($id);
        return redirect('najave.show')->with('flash_message', 'najave obrisana!');
    }
}
