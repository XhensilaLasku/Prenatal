<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'categories';

    // Eager-loading images
    /**
     * The relations to eager load on every query.
     *
     * @var array
     */

    public $timestamps = false;

    public function getFullCategoryPath() {
        // Base case of recursion
        if($this->parent_id === $this->id)
            return ucwords(strtolower($this->name));

        return Item::getFullCategoryPath($this->parent_id) . "  /  " . ucwords(strtolower($this->name));
    }

    public static function getFullCategoryPathByName($category_name) {
        $cat = Category::where('name', $category_name)->first();

        return $cat->getFullCategoryPath();
    }

    // Defining m-2-m relationship with items table
    public function items() {
        return $this->belongsToMany(Item::class, 'item_categories')->using(ItemCategory::class);
    }

    // Relationship to find the parents and immediate children to any category
    public function parent() {
        return $this->belongsTo(Category::class, 'parent_id', 'id');
    }

    public function children() {
        return $this->hasMany(Category::class, 'parent_id', 'id');
    }

    // Function to get all subcategories of any category
    public function allSubcategories() {
         // Will simply return all subcategories with no regard for their tree structure
        // Algorithm uses simple depth-first search (DFS) with stacks

        // Creating stack to temporarily hold subcats
        $stack = new \Ds\Stack();

        $subcategories = []; // Will contain all visited categories

        $stack->push($this);

        while(!$stack->isEmpty()) {
            $current_level = $stack->pop();     // Get topmost level
            $subcategories[] = $current_level->id;  // Push current level to array

            foreach($current_level->children as $child) {
                if($child != null and $child->id != $this->id)
                    $stack->push($child);
            }
        }

        return $subcategories;
    }
}
