<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    public $timestamps = false;

    // Defining relationship to items
    public function item() {
        return $this->belongsTo(Item::class);
    }
}
