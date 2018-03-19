<?php

use Illuminate\Database\Seeder;

class TeamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teams')->insert([
            [
                'teamname' => "Real Madrid",
                'logopath' => "/images/team/001.png",
                'status' => 1,
            ],
            [
                'teamname' => "Barcelona",
                'logopath' => "/images/team/002.png",
                'status' => 1,
            ], 
            [
                'teamname' => "Manchester United",
                'logopath' => "/images/team/003.png",
                'status' => 1,
            ]
        ]);
        
    }
}
