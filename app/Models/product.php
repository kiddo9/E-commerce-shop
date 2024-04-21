<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;

    public function scopeSearchProducts($query, $searchTerm)
    {
        return $query->where('Pname', 'like', "%$searchTerm%")
            ->orWhere('description', 'like', "%$searchTerm%")
            ->orwhere('category', 'like', "%$searchTerm%");
    }
}
