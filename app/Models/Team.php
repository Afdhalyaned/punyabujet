<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function user()
    {
        return $this->hasMany(User::class);
    }

    public function category()
    {
        return $this->hasMany(Category::class);
    }

    public function wallet()
    {
        return $this->hasMany(Wallet::class);
    }

    public function transaction()
    {
        return $this->hasMany(Transaction::class);
    }

}
