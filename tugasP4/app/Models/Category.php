<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $fillable = [
        'category',
    ];

    //1 kategori banyak buku nya
    public function books(){
        return $this->hasMany(Book::class);
    }
}
