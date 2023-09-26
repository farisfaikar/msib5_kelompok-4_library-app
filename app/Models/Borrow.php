<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Borrow extends Model
{
    use HasFactory;
    public $incrementing = false;
    protected $keyType = "string";
    protected $primaryKey = "uuid";
    protected $fillable = [
        "uuid",
        "book_uuid",
        "user_uuid",
        "borrow_date",
        "return_date",
    ];
}
