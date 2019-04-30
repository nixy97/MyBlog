<?php

use Illuminate\Database\Seeder;

class FlagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0; $i<4; $i++) {
            Flag::create([
                'user_id' => ($i+1),
                 'color' => 'red'
            ]);
        }
    }
}
