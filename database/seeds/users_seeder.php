<?php

use Illuminate\Database\Seeder;

class users_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     //it doesn't work?
    public function run()
    {
      for ($i=0;$i<12;$i++){
          DB::table('users')->insert([
            'id' => 1000+$i,
           'name' => str_random(10),
           'phone' => '066'.str_random(12),
       ]);
      }

    }
}
