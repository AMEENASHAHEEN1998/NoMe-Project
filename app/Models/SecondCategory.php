<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SecondCategory extends Model
{
    use HasFactory;

    protected $fillable = ['*'];

    public function category()
    {
        return $this->belongsTo(category::class);
    }

    public function subCategories()
    {
        return $this->hasMany(SubCategory::class);
    }
}
