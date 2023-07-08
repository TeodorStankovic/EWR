<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Smene;
use Illuminate\View\View;

class SmeneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $smene = Smene::all();
        return view ('smene.index')->with('smene', $smene);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('smene.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        Smene::create($input);
        return redirect('smene/create')->with('flash_message', 'Smena je dodata!');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): View
    {
        $smene = Smene::all();
        return view('smene.show')->with('smene', $smene);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $smene = Smene::find($id);
        return view('smene.edit')->with('smene', $smene);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $smene = Smene::find($id);
        $input = $request->all();
        $smene->update($input);
        return redirect('smene')->with('flash_message', 'Smene su updateovani!');  

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        Smene::destroy($id);
        return redirect('smene/show')->with('flash_message', 'Smena je obrisana!');

    }
}
