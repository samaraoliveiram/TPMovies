<?php

use Illuminate\Database\Seeder;

class DirectorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('directors')->insert(['name'=>'Quentin Tarantino', 'birthday'=>'1963-03-23']);
    }
}
