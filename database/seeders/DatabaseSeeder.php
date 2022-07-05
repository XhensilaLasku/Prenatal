<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Image;
use App\Models\Item;
use App\Models\ItemCategory;
use App\Models\ItemColor;
use App\Models\ItemSize;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Clearing all tables beforehand
        ItemColor::truncate();
        ItemSize::truncate();
        Image::truncate();
        ItemCategory::truncate();
        Category::truncate();
        Item::truncate();

        // Initial parsing of XML data that will be sent for additional processing to each seeder class
        $data_feed = simplexml_load_file(storage_path('xml/dentsu-feed.xml'));        // Loading entire XML data feed

        $category_lists = $data_feed->xpath("/rss/channel/item/categories/list");    // Selecting all elements relevant to item categories

        // Calling seeders for all database tables
        $this->callWith(CategorySeeder::class, ['category_lists' => $category_lists]);
        unset($category_lists); // To destroy created array

        // Reading all item elements from data feed
        $items = $data_feed->xpath("/rss/channel/item");
        $this->callWith(ItemSeeder::class, ['items' => $items]);
        
        $this->callWith(ItemCategorySeeder::class, ['items' => $items]);
        
        $this->callWith(ImageSeeder::class, ['items' => $items]);

        $this->callWith(ItemColorSeeder::class, ['items' => $items]);

        $this->callWith(ItemSizeSeeder::class, ['items' => $items]);
        unset($items);
    }
}