<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use App\Models\Deposit;
class UserTransaction extends Model
{
    protected $fillable = [
    	'transaction_id',
        'user_id',
        'type',
        'amount',
        'description',
        'status',
        'reference_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function deposit(){
    return $this->belongsTo(Deposit::class, 'user_id', 'user_id');
     }



}
