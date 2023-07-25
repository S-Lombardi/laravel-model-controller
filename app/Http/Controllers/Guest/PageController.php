<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Comic;
class PageController extends Controller
{
    public function index() {
        //utilizzo funzione all() per recuperare tutti i fumetti dal Model
        $comics = Comic::all();

        //dd($comics);
        
        return view('home', compact('comics'));
    }

}
?>