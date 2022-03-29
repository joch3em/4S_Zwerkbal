<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Je kunt hier je eigen seeders invoegen:



        //
        // NIETS AANPASSEN TUSSEN DEZE REGELS!
        // ~!@#$%^&**()_+

        //
        // (EXTRA) TEAMS
        //
        $team = new \App\Models\Team();
        $team->name = "German National Quidditch team";
        $team->type = "country";
        $team->origin = "Duitsland";
        $team->save();

        $team = new \App\Models\Team();
        $team->name = "Hufflepuff";
        $team->type = "school";
        $team->origin = "Zweinstein";
        $team->save();

        $team = new \App\Models\Team();
        $team->name = "4S Quidditch Team";
        $team->type = "commercial";
        $team->save();

        //
        // SPELERS
        //
        $characters = ["Ludo Bagman", "Argus Filch", "Marvolo Gaunt", "Rubeus Hagrid", "Lee Jordan", "Viktor Krum", "Draco Malfoy", "Padma Patil", "Newt Scamander", "Fred Weasley", "Oliver Wood", "Horace Slughorn", "Alicia Spinnet", "Garrick Ollivander", "Luna Lovegood", "Neville Longbottom", "Gregory Goyle", "Colin Creevey", "Susan Bones", "Hannah Abbott"];
        $types = ["chaser", "beater", "keeper", "seeker"];
        $teams = \App\Models\Team::all();

        foreach($characters as $character)
        {
            $player = new \App\Models\Player();
            $player->team_id = $teams->random()->id;
            $player->name = $character;
            $player->type = $types[array_rand($types)];
            $player->save();
        }

        // +_)(*&^%$#@!~
        // NIETS AANPASSEN TUSSEN DEZE REGELS!
        // 
    }
}
