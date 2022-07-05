<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run($category_lists = null)
    {
        for($i = 0; $i < count($category_lists); $i++) {
            // Getting just the category elements themselves for a specific list
            $categories = $category_lists[$i]->xpath("*[contains(name(), 'category')]");

            for($j = 0; $j < count($categories); $j++) {
                // The parent id for any subcategory will be the id of its containing category, or the category one level above
                // (unless it is the topmost category, in which case it will have its own id as a parent id)
                $parentId = ($j === 0) ? $categories[$j]->id : $categories[$j - 1]->id;

                // Since duplicate categories occur often, insertOrIgnore is used to ignore errors generated when trying to insert dupes
                DB::table('categories')->insertOrIgnore(['id' => $categories[$j]->id, 'name' => preg_replace('/&amp;/', 'e', $categories[$j]->name), 'parent_id' => $parentId]);
            }
        }
    }
}
