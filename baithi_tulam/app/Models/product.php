<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $primaryKey = 'id';
    public $fillable = [
        'name', 
        'category_id', 
        'image', 
        'price', 
        'status',
        'description',

    ];
    public function categories()
    {
        return $this->belongsTo(category::class,'category_id');
    }
    // public function categories()
    // {

    //     return $this->hasOne(category::class,'id');
    // }

    // static function  getPage() {
    //     return product::paginate(5);
    // }
    // static function  getAll() {
    //      return $this->hasOne(categories::class);
        
    // }

}