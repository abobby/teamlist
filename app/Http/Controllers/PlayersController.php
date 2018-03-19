<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Controllers\TeamController AS Teams;

class PlayersController extends Controller
{
    public function __construct() {
        
    }
    
    public static function playersList($tid) {
        if($tid) {
            $players = self::fetchPlayers($tid);
            if(empty($players)){
                $players = '';
            }
            
            $team = Teams::teamDetails($tid);
            return view('players.team-list', [
                'players' => $players,
                'team' => $team,
            ]);
        } else {
            abort(404);
        }
    }
    
    private static function fetchPlayers($tid) {
        if(!empty($tid)){
            $players = \App\Players::where('team_id', $tid)
                        ->orderBy('firstName', 'asc')
                        ->get();
            if(count($players) > 0){
                return $players;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
}
