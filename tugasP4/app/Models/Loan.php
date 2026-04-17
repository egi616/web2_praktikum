<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    //
    protected $fillable = [
        'user_npm',
        'loan_at',  
        'return_at'
    ];

    //peminjaman ini milik satu user 
    public function user(){
        return $this->belongsTo(User::class, 'user_npm', 'npm');
    }

    //peminjaman bisa memiliki banyak buku
    public function loanDetails(){
        return $this->hasMany(LoanDetail::class);
    }
}
