<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    //
    protected $fillable = [
        'title',
        'author',
        'year',
        'publisher',
        'city',        
        'cover',       
        'category_id',
        'bookshelf_id'
    ];

    //1 buku masuk 1 kategori
    public function category(){
        return $this->belongTo(Category::class);
    }

    // 1 buku ada di 1 rak
    public function bookshelf(){
        return $this->belongTo(Bookshelf::class);
    }
    
    //1 buku bisa bnyak di detail_loans
    public function loanDetails(){
        return $this->hasMany(LoanDetail::class);
    }
}
