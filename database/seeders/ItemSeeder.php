<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Item;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run($items = null)
    {
        function cleanInput($text) {
            $text = addslashes($text);

            return ($text == '') ? null : $text;
        }

        for($i = 0; $i < count($items); $i++) {
            if (!strcmp($items[$i]->id, $items[$i]->parent_id)) {
                // If item is not just a size option item
                $item = $items[$i];
                $all_genere = explode(',', $item->genere);
                Item::create(['id' => cleanInput($item->id), 'mpn' => cleanInput($item->mpn), 'price' => cleanInput(($item->stock != '') ? $item->price : $items[$i + 1]->price), 'sale_price' => cleanInput(($item->stock != '') ? $item->sale_price : $items[$i + 1]->sale_price), 'vip_price' => cleanInput(($item->stock != '') ? $item->vip_price : $items[$i + 1]->vip_price), 'title' => cleanInput($item->title), 'description' => cleanInput($item->description), 'marche' => cleanInput($item->marche), 'genere' => cleanInput(ltrim($all_genere[0]))]);
            }
        }
    }
}
