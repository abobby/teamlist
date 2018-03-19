<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Controllers\TeamController AS Teams;
use App\Http\Controllers\PlayersController AS Players;

class IndexController extends Controller
{
    public function __construct() {
        
    }
    
    public static function index() {
        return Teams::index();
    }
}
