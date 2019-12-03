<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $this->getUpdatedAttributes()->each(static function ($attributes) {
            DB::table('categories')->updateOrInsert([
                'slug' => $attributes['slug'],
            ], $attributes);
        });
    }

    private function getUpdatedAttributes(): Collection
    {
        return collect([
            [
                'name' => 'Case Studies',
                'slug' => 'case-studies',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Education',
                'slug' => 'education',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
