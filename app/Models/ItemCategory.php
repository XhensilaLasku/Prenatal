<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class ItemCategory extends Pivot
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'item_categories';

    public $timestamps = false;
}
