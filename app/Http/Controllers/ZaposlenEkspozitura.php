<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Zaposlen;
use App\Models\Ekspoziture;
use Illuminate\View\View;
 
class ZaposlenEkspozitura extends Controller
{
 
    public function index(): View
    {
        $zaposlenexpo = Zaposlen::with('ekspozitura')->get();
        return view('zaposleniexpoziture.index')->with('zaposlen',$zaposlenexpo);
    }
 
}