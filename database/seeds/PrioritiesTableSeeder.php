<?php

use Illuminate\Database\Seeder;

class PrioritiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('priorities')->insert([
            'name' => 'Random',
            'sort_order' => 5,
            'background_color' => '#FBFFB9',
        ]);

        DB::table('priorities')->insert([
            'name' => 'Meh',
            'sort_order' => 0,
            'background_color' => '#E0E3DA',
        ]);

        DB::table('priorities')->insert([
            'name' => 'OMG',
            'sort_order' => 10,
            'background_color' => '#DEDCEE',
        ]);

    }
}
