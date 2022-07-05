<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Item extends Model
{
    // Scope to filter out items based on search conditions
    public function scopeFilter($query, array $filters) {
        return $query->category($filters['category'] ?? null)->content($filters['search'] ?? null)
            ->gender($filters['gender'] ?? null)->price($filters['price_range'] ?? null)
            ->brand($filters['brand'] ?? null)->with('colors')->color($filters['color'] ?? null);
    }

    // Defining protected scopes to be use in scopeFilter method
    protected function scopeContent($query, $text) {
        // Check if we have a search condition in the filter
        if($text) {
            return $query->where('title', 'like', '%' . $text . '%')
                        ->orWhere('description', 'like', '%' . $text . '%');
        }

        return $query;
    }

    protected function scopeCategory($query, $category) {
        if($category) {
            $categories = Item::returnCategoryFilters(preg_replace('#[ -]+#', ' ', $category));
            if($categories)
                return $query->whereHas('categories', function (Builder $i_query) use ($categories) {
                    $i_query->whereIn('category_id', $categories);
                });
        }

        return $query;
    }

    protected function scopeBrand($query, $brands) {
        if($brands) {
            // To find and convert uncategorized brands into proper null values, allowing for correct querying
            if(in_array("nulled", $brands)) {
                return $query->whereNull('marche')->orWhereIn('marche', $brands);
            }

            return $query->whereIn('marche', $brands);
        }
        return $query;
    }

    protected function scopeColor($query, $colors) {
        if($colors) {
            // To find and convert uncategorized colors into proper null values, allowing for correct querying
            if(in_array("nulled", $colors)) {
                return $query->whereHas('colors', function (Builder $i_query) use ($colors) {
                    $i_query->whereNull('color')->orWhereIn('color', $colors);
                });
            }

            return $query->whereHas('colors', function (Builder $i_query) use ($colors) {
                $i_query->whereIn('color', $colors);
            });
        }

        return $query;
    }

    protected function scopeGender($query, $genders) {
        if($genders) {
            if(in_array("nulled", $genders)) {
                return $query->whereNull('genere')->orWhereIn('genere', $genders);
            }

            return $query->whereIn('genere', $genders);
        }
        return $query;
    }

    protected function scopePrice($query, $priceRange) {
        if($priceRange && $priceRange[0] != null && $priceRange[1] != null)
            return $query->whereBetween('price', $priceRange);
        
        return $query;
    }

    public function scopeSort($query, $sorting_criteria) {
        switch($sorting_criteria) {
            case "relevance":
                return $query;
            case "date":
                return $query->orderBy('updated_at', 'desc');
            case "price-asc":
                return $query->orderBy('price', 'asc');
            case "price-desc":
                return $query->orderBy('price', 'desc');
            case "name-asc":
                return $query->orderBy('title', 'asc');
            case "name-desc":
                return $query->orderBy('title', 'desc');
            default:
                return $query;
        }
    }

    protected function returnCategoryFilters($category_name) {
        // Replace hyphens in category name with spaces (since that's how they are stored in the db)
        $category_name = str_replace("-", " ", $category_name);
        $subcategories = Category::where('name', $category_name)->first();
        if($subcategories)
            $subcategories = $subcategories->allSubcategories();

        return $subcategories;
    }

    // Get full string path of all parent categories for this item    
    protected function getFullCategoryPath($category_id) {
        $current_category = Category::find($category_id);
        
        // Base case of recursion
        if($current_category->parent_id === $category_id)
            return ucwords(strtolower($current_category->name));

        return Item::getFullCategoryPath($current_category->parent_id) . "  /  " . ucwords(strtolower($current_category->name));
    }

    public function getFullCategoryPaths() {
        $category_paths = [];
        foreach($this->categories as $category) {
            $category_paths[] = Item::getFullCategoryPath($category->id);
        }

        return $category_paths;
    }

    // Defining m-2-m relationship with categories
    public function categories() {
        return $this->belongsToMany(Category::class, 'item_categories')->using(ItemCategory::class);
    }

    // Defining relationship to images
    public function images() {
        return $this->hasMany(Image::class);
    }

    // Defining relationship to colors
    public function colors() {
        return $this->hasMany(ItemColor::class);
    }

    // Defining relationship to sizes
    public function sizes() {
        return $this->hasMany(ItemSize::class);
    }

    // Defining relationship to reviews
    public function reviews() {
        return $this->hasMany(Review::class);
    }
}
