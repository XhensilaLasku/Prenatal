<?php

namespace Database\Seeders;

use App\Models\Image;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run($items = null)
    {
        foreach($items as $item) {
            // Inserting the image each item contains in its image_link element
            Image::create(['image_link' => $item->image_link, 'item_id' => $item->id]);

            // Grabbing all images in the item's gallery (if any)
            $gallery_images = $item->xpath("gallery/image");
            foreach($gallery_images as $image) {
                Image::create(['image_link' => $image, 'item_id' => $item->id]);
            }
        }
    }
}
