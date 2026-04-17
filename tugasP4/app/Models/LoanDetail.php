<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LoanDetail extends Model
{
    //
    protected $table = 'loan_detail';

    protected $fillable = [
        'loan_id',
        'book_id',
        'is_return'
    ];

    //detail ini milik 1 Peminjaman
    public function loan(){
        return $this->belongsTo(Loan::class);
    }

    //detail ini untuk 1 buku
    public function book(){
        return $this->belongsTo(Book::class);
    }

    //1 detail Peminjaman bisa punya 1 data returns
    public function bookReturn(){
        return $this->hasOne(BookReturn::class, 'loan_detail_id');
    }
}
