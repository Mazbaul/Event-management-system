<?php

use Illuminate\Database\Seeder;
Use App\Hallmap;
class HallmapsTableDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('hallmaps')->delete();
    Hallmap::create(array(
      'vip' => '12',
      'general' => '15',
      'event_id' => '1',




    ));
    }
}
