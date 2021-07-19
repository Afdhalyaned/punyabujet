<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategorySub extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'name',
        'budget',
        'type',
    ];

    public function transaction()
    {
        return $this->hasMany(Transaction::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

}
