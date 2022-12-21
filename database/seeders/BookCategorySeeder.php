<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as faker;
use Illuminate\Support\Facades\DB;

class BookCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = faker::create();
        for($a=1;$a<=8;$a++) {
            DB::table('books_categories')->insert([
                'book_id' => $a,
                'category_id' => $faker->numberBetween(1, 3)
            ]);
        }
    }
}
