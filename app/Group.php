<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $fillable = [
        'name'
    ];

    public function transaction()
    {
        return $this->belongsTo('App\Transaction');
    }
}
