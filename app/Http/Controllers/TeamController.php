<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Controllers\PlayersController AS Players;

class TeamController extends Controller
{
    public function __construct() {
        
    }
    
    public static function index() {
        $teamlist = self::allTeams();
        
        if(!$teamlist){
            $teamlist = '';
        }
        
        return view('team.index', [
            'teams' => $teamlist,
        ]);
    }
    
    private static function allTeams(){
        $allTeams = \App\Teams::all();
        
        if(count($allTeams) > 0){
            return $allTeams;
        } else {
            return false;
        }
    }
    
    public static function teamDetails($tid){
        $team = \App\Teams::find($tid);
        if(count($team) > 0){
            return $team;
        } else {
            return false;
        }
    }
}
