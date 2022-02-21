<?php

use App\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ["Giochi", "Matematica", "Social", "Informatica"];

        foreach ($categories as $category) {
            $newCategory = new Category();

            $newCategory->name = $category;
            $newCategory->slug = Str::of($newCategory->name)->slug('-');

            $newCategory->save();
        }
    }
}
