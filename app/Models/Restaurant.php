<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;

    public function scopeSearch(Builder $query, $params)
    {
        if ($params['name']) {
            $query->where('name', 'like', '%' . $params['name'] . '%');
        }
        if ($params['category']) {
            $query->where('category', 'like', '%' . $params['category'] . '%');
        }
        return $query;
    }
}
