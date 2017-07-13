<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

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
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('priorities')->insert([
            'name' => 'Meh',
            'sort_order' => 0,
            'background_color' => '#E0E3DA',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('priorities')->insert([
            'name' => 'OMG',
            'sort_order' => 10,
            'background_color' => '#DEDCEE',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

    }
}
