<?php

use Illuminate\Database\Seeder;
use App\user;
class UsersTableDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
      //  DB::table('users')->delete();
    User::create(array(
      'name' => 'anik',
      'email' => 'mazbaul17@gmail.com',
      'password' => bcrypt('123456'),



    ));
    }
}
