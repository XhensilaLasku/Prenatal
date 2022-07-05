<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemColor extends Model
{

    // Table will have no timestamps
    public $timestamps = false;

    // Defining relationship to item
    public function item() {
        return $this->belongsTo(Item::class);
    }
}
