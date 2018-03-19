<?php

use Illuminate\Database\Seeder;

class PlayersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('players')->insert([
            [
                'team_id' => 1,
                'firstName' => 'Cristiano',
                'lastName' => 'Ronaldo',
                'profileimage' => '/images/players/team01/001.jpg',
            ],
            [
                'team_id' => 1,
                'firstName' => 'Gareth',
                'lastName' => 'Bale',
                'profileimage' => '/images/players/team01/002.jpg',
            ],
            [
                'team_id' => 1,
                'firstName' => 'Karim',
                'lastName' => 'Benzema',
                'profileimage' => '/images/players/team01/003.jpg',
            ],
            [
                'team_id' => 2,
                'firstName' => 'Lionel',
                'lastName' => 'Messi',
                'profileimage' => '/images/players/team02/001.jpg',
            ],
            [
                'team_id' => 2,
                'firstName' => 'Luis',
                'lastName' => 'Suarez',
                'profileimage' => '/images/players/team02/002.jpg',
            ],
            [
                'team_id' => 2,
                'firstName' => 'Andres',
                'lastName' => 'Iniesta',
                'profileimage' => '/images/players/team02/003.jpg',
            ],
            
            
        ]);
    }
}
