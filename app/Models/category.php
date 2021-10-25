<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;
<<<<<<< HEAD


    public function product()
    {
        return $this->hasMany(product::class);
    }
=======
    protected $fillable = ['category_name'];
>>>>>>> 95610aa367778a6294b9ec6810625843dcff2d4d
}
