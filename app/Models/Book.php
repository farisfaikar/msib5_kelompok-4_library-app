<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Book extends Model
{
    use HasFactory;
    public $incrementing = false;
    protected $keyType = "string";
    protected $primaryKey = "uuid";
    protected $fillable = [
        "title",
        "author",
        "synopsis",
        "publisher",
        "category_uuid",
    ];
    
    public function category(): HasOne
    {
        return $this->hasOne(Category::class, "uuid", "category_uuid");
    }
}
