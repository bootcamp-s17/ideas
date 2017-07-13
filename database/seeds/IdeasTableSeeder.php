<?php

use Illuminate\Database\Seeder;

class IdeasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // Store id for Meh in $meh_id
        $meh_id = DB::table('priorities')
           ->select(DB::raw('id'))
           ->where('name', '=', 'Meh')
           ->get();

        // Store id for Random in $random_id
        $random_id = DB::table('priorities')
           ->select(DB::raw('id'))
           ->where('name', '=', 'Random')
           ->get();

        // Store id for OMG in $omg_id
        $omg_id = DB::table('priorities')
           ->select(DB::raw('id'))
           ->where('name', '=', 'OMG')
           ->get();

        //This is a Meh.
        DB::table('ideas')->insert([
            'title' => 'To do',
            'content' => 'Take back library books',
            'sort_order' => 10,
            'priority_id' => $meh_id[0]->id,
        ]);

        // This is a Random.
        DB::table('ideas')->insert([
            'title' => 'Treehouse that looks like a giant squirrel',
            'content' => 'This would be terrifying and cool and have interesting space inside.',
            'sort_order' => 20,
            'priority_id' => $random_id[0]->id,
        ]);

        // This is an OMG.
        DB::table('ideas')->insert([
            'title' => 'There are Oreos downstairs!',
            'content' => 'Nomnomnom!',
            'sort_order' => 5,
            'priority_id' => $omg_id[0]->id,
        ]);

    }
}
