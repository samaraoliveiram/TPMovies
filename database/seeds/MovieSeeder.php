<?php

use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movies')->insert(['title'=>'Kill Bill', 'sinopsys'=>'After awakening from a four-year coma, a former
        assassin wreaks vengeance on the team of assassins who betrayed her.', 'director_id'=>'1']);
    }
}
