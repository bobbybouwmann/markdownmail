<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class)->create([
            'name' => 'Bobby Bouwmann',
            'email' => 'bobbybouwmann@gmail.com',
        ]);
    }
}
