<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
// use Illuminate\Database\Eloquent\Relations\HasMany;



class category extends Model
{
    use HasFactory;
    protected $table = 'categories';
    protected $primaryKey = 'id';

    // public function products()
    // {
    //     return $this->belongsTo(product::class);
    // }
    // public function products()
    // {
    //     return $this->hasMany(product::class,'category_id');
    // }
}