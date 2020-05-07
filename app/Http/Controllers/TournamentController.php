<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tournament;

class TournamentController extends Controller
{
    
    public function create(Request $request){
        
        
        $tournament = new Tournament;
        $tournament->name = $request->name;
        $tournament->date_start = $request->start;
        $tournament->date_end = $request->ending;
        $tournament->save();
        
        
    }
    
}
