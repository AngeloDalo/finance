<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'type_id',
        'section_id',
        'group_id',
        'name',
        'date',
        'price',
        'created_at',
        'updated_at',
    ];

    public function type()
    {
        return $this->hasMany('App\Type');
    }
    public function section()
    {
        return $this->hasMany('App\Section');
    }
    public function group()
    {
        return $this->hasMany('App\Group');
    }
}
