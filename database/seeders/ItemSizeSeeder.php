<?php

namespace Database\Seeders;

use App\Models\ItemSize;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ItemSizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run($items=NULL)
    {
         // Must process sizes since they typically show up in comma-seperated lists in source data
         function sizeProcessTextList($text) {
            $words = explode(",", $text);
            for($i = 0; $i < count($words); $i++) {
                $words[$i] = sizeCheckNull(ltrim($words[$i]));
            }
    
            return $words;
        }
    
        function sizeCheckNull($word) {
            return (($word == "") ? null : $word);
        }
        
        foreach($items as $item) {
            $sizes = sizeProcessTextList($item->taglia);
            foreach($sizes as $size)  {
                ItemSize::create(['item_id' => $item->id, 'size' => $size]);
            }
        }
    }
}
