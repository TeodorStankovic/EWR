<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Zaposlen;
use App\Models\Ekspoziture;
use Illuminate\View\View;
 
class ZaposlenController extends Controller
{
 
    public function index(): View
    {
        $zaposlen = Zaposlen::all();
        return view ('zaposlen.index')->with('zaposlen', $zaposlen);
    }
 
    public function create(): View
    {
        $ekspoziture = Ekspoziture::all();
        return view('zaposlen.create')->with('ekspoziture' ,$ekspoziture);
    }
 
  
    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        $zaposleni=Zaposlen::create($input);
        $id = $input['naziv'];
        $ekspozitura = Ekspoziture::find($id);
        $ekspozitura-> zaposleni()->attach($zaposleni->id);
        
        return redirect('zaposlen/create')->with('flash_message', 'Zaposleni Dodat!');
    }
 
    public function show(string $id): View
    {
        $zaposlen = Zaposlen::all();
        return view('zaposlen.show')->with('zaposlen', $zaposlen);
    }
 
    public function edit(string $id): View
    {
        $zaposlen = Zaposlen::find($id);
        return view('zaposlen.edit')->with('zaposlen', $zaposlen);
    }
 
    public function update(Request $request, string $id): RedirectResponse
    {
        $zaposlen = Zaposlen::find($id);
        $input = $request->all();
        $zaposlen->update($input);
        return redirect('zaposlen')->with('flash_message', 'Zaposleni updateovan!');  
    }
 
    
    public function destroy(string $id): RedirectResponse
    {
        Zaposlen::destroy($id);
        return redirect('zaposlen/show')->with('flash_message', 'Zaposleni obrisan!');
    }
}