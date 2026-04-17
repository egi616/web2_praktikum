<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Returns extends Model
{
    //nama tabel
    protected $table = 'returns';

    protected $fillable = [
        'loan_detail_id',
        'charge', 
        'amount'  
    ];

    //pengembalian merujuk pada 1 detail peminjaman
    public function loanDetail(){
        return $this->belongsTo(LoanDetail::class);
    }
}
