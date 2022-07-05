<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ItemCategory;

class ItemCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run($items = null)
    {
        foreach($items as $item) {
            // Getting all lists for that respective item
            $lists = $item->xpath("categories/list");
            for($i = 0; $i < count($lists); $i++) {
                // Getting all categories in each respective list
                $categories = $lists[$i]->xpath("*[contains(name(), 'category')]");
                $lastCategoryId = $categories[count($categories) - 1]->id;

                ItemCategory::create(['item_id' => $item->id, 'category_id' => $lastCategoryId]);
            }
        }
    }
}
