<?php

namespace Database\Seeders;

use App\Models\ItemColor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ItemColorSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run($items = null)
    {
        // Must process colors since they typically show up in comma-seperated lists in source data
        function colorProcessTextList($text) {
            $words = explode(",", $text);
            for($i = 0; $i < count($words); $i++) {
                $words[$i] = colorCheckNull(ltrim($words[$i]));
            }
    
            return $words;
        }
    
        function colorCheckNull($word) {
            return (($word == "") ? null : $word);
        }
        
        foreach($items as $item) {
            $colors = colorProcessTextList($item->colore);
            foreach($colors as $color)  {
                ItemColor::create(['item_id' => $item->id, 'color' => $color]);
            }
        }
    }
}
