<?php

use Illuminate\Database\Seeder;
Use App\Event;
class EventsTableDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //DB::table('events')->delete();
  Event::create(array(
    'name' => 'Music concert',
    'location' => 'dhaka',
    'lat' => '23.8103',
    'lng' => '90.4125',
    'date' => '17/12/18',



  ));
    }
}
