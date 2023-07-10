<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Zaposlen;
use App\Models\Ekspoziture;
use App\Models\Poslovi;
use App\Models\Smene;
use App\Models\Uloga;
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
        $posao = Poslovi::all();
        $smene = Smene::all();
        $uloga = Uloga::all();
        $parametri = ['ekspoziture'=>$ekspoziture,'poslovi'=> $posao,'smene' => $smene,'uloga' => $uloga];

        

        return view('zaposlen.create')->with($parametri);



    }
 
  
    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        $zaposleni=Zaposlen::create($input);

        $id = $input['naziv'];
        $ekspozitura = Ekspoziture::find($id);
        $ekspozitura-> zaposleni()->attach($zaposleni->id);

        $id_posla = $input['naziv_posla'];
        $posao = Poslovi::find($id_posla);
        $posao-> zaposleniPosao()->attach($zaposleni->id);

        $id_smene = $input['tip_smene'];
        $smene = Smene::find($id_smene);
        $smene-> zaposleniSmene()->attach($zaposleni->id);

        $id_uloge = $input['naziv_uloge'];
        $uloga = Uloga::find($id_uloge);
        $uloga-> zaposleniUloge()->attach($zaposleni->id);


    
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
        $ekspoziture = Ekspoziture::all();
        $posao = Poslovi::all();
        $smene = Smene::all();
        $uloga = Uloga::all();

        $parametri = ['zaposlen'=>$zaposlen,'ekspoziture'=> $ekspoziture,'poslovi'=> $posao, 'smene'=> $smene, 'uloga'=> $uloga];
        return view('zaposlen.edit')->with($parametri);
    }
 
    public function update(Request $request, string $id): RedirectResponse
    {
        $zaposlen = Zaposlen::find($id);
        $input = $request->all();
        

        $id_exStari = $zaposlen -> hvatEks()-> id_ex;
        $ekspozitura = Ekspoziture::find($id_exStari);
        $ekspozitura -> zaposleni()->detach($zaposlen->id);
        
        $id_ex = $input['naziv'];
        $ekspozituraNova = Ekspoziture::find($id_ex);
        $ekspozituraNova-> zaposleni()->attach($zaposlen->id);

        $id_poStari = $zaposlen -> hvatPosao()-> id_posla;
        $posao = Poslovi::find($id_poStari);
        $posao -> zaposleniPosao()->detach($zaposlen->id);
        
        $id_posla = $input['naziv_posla'];
        $posaoNovi = Poslovi::find($id_posla);
        $posaoNovi-> zaposleniPosao()->attach($zaposlen->id);

        $id_smStari = $zaposlen -> hvatSmene()-> id_smene;
        $smene = Smene::find($id_smStari);
        $smene -> zaposleniSmene()->detach($zaposlen->id);
        
        $id_smene = $input['tip_smene'];
        $smenaNova = Smene::find($id_smene);
        $smenaNova-> zaposleniSmene()->attach($zaposlen->id);

        $id_ulStari = $zaposlen -> hvatUloge()-> id_uloge;
        $uloga = Uloga::find($id_ulStari);
        $uloga -> zaposleniUloge()->detach($zaposlen->id);


        $id_uloge = $input['naziv_uloge'];
        $ulogaNovi = Uloga::find($id_uloge);
        $ulogaNovi-> zaposleniUloge()->attach($zaposlen->id);


        $zaposlen->update($input);

        return redirect('zaposlen')->with('flash_message', 'Zaposleni updateovan!');  
    }
 
    
    public function destroy(string $id): RedirectResponse
    {
        Zaposlen::destroy($id);
        return redirect('zaposlen/show')->with('flash_message', 'Zaposleni obrisan!');
    }
}