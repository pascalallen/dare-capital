<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $this->getUpdatedAttributes()->each(static function ($attributes) {
            DB::table('users')->updateOrInsert([
                'email' => $attributes['email'],
            ], $attributes);
        });
    }

    private function getUpdatedAttributes(): Collection
    {
        return collect([
            [
                'name' => 'Cole Harmonson',
                'email' => 'cole@darebizcapital.com',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'bio' => 'From the very beginning of his career, Cole has recognized the transformative value of factoring and asset-based lending to manage cashflow for growing companies without impacting equity. In 1996, he founded State Bank’s factoring and asset based lending business; when they sold their business in 2007, Cole took the leap into entrepreneurship and founded Far West Capital, which had a successful bank exit in 2018 after supporting hundreds of companies’ growth.',
                'avatar' => 'cole-harmonson.png',
                'title' => 'co-founder and CEO',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Debra Zukonik',
                'email' => 'debra@darebizcapital.com',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'bio' => 'Debra Zukonik is a well-known and respected leader in factoring and asset-based lending, with over 30 years’ experience. Her risk-management expertise is unparalleled in the working capital industry. Prior to joining Dare Capital as Chief Credit Officer, she was the President and Partner of Vertex Financial, a leading Texas-based factor, from 2001 to 2017, and served as Chief Credit Officer of BAMFi from 2017 to 2019.',
                'avatar' => 'debra-zukonik.png',
                'title' => 'co-founder and CCO',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
