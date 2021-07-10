<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'team_id',
        'date',
        'detail',
        'ammount',
        'category_sub_id',
        'wallet_id',
    ];

    public function category_sub(){
        return $this->belongsTo(CategorySub::class, 'category_sub_id');
    }
    public function wallet(){
        return $this->belongsTo(wallet::class, 'wallet_id');
    }
    
}
