<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TeamClass extends Model
{
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','abbrevation','level'
    ];

    public function teams(): HasMany
    {
        return $this->hasMany(Team::class,'class_id','id');
    }
}
