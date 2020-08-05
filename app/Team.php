<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Team extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'abbrevation', 'country'
    ];

    public function class(): BelongsTo
    {
        return $this->belongsTo(TeamClass::class,'class_id','id');
    }

    public function bike(): BelongsTo
    {
        return $this->belongsTo(Bike::class);
    }

    public function cyclists(): HasMany
    {
        return $this->hasMany(Cyclist::class);
    }
}
