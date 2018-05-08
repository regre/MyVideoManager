<?php

use Illuminate\Database\Seeder;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory(User::class)->create([
        	'name' => 'Abdullah Fachmi',
        	'email' => 'abdullah.fachmi@gmail.com',
        	'password' => bcrypt('password'),
        	'is_active' => 1,
        	]);

        factory(User::class, 10)->create();
    }
}
