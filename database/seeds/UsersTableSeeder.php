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
            'email' => 'pascal@darebizcapital.com',
        ]);

        factory(App\User::class)->create([
            'name' => 'Cole Harmonson',
            'email' => 'cole@darebizcapital.com',
        ]);

        factory(App\User::class)->create([
            'name' => 'Matt Smulski',
            'email' => 'matt@darebizcapital.com',
        ]);
    }
}
