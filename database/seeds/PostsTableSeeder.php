<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
        'username' => 'cuongnm',
        'password' => bcrypt('manhcuong'),
        'email' => 'cuongnm4215@gmail.com',
        'fullname' => 'Nguyen Manh Cuong',
        'address' => 'Ha Noi',
        'phone' => '0989069254',
        'is_admin' => 1
      ]);
      factory(App\Post::class, 20)->create();
    }
}
