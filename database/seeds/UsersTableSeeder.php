<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        factory(App\User::class)->create([
            'name' => 'Pascal Allen',
            'email' => 'pascal.allen88@gmail.com',
        ]);

        factory(App\User::class)->create([
            'name' => 'Cole Harmonson',
            'email' => 'cole@darebizcapital.com',
        ]);
    }
}
