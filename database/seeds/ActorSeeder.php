<?php

use Illuminate\Database\Seeder;

class ActorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('actors')->insert(['name'=>'Uma Thurman', 'birthday'=>'1970-04-29']);
        DB::table('actors')->insert(['name'=>'Daryl Hannah', 'birthday'=>'1960-12-03']);
        DB::table('actors')->insert(['name'=>'David Carradine', 'birthday'=>'1936-12-08']);
    }
}
