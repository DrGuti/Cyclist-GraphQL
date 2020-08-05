<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use PhpParser\Node\Expr\Cast\String_;

class Cyclist extends Model
{
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        "first_name","last_name","country","city","birth_day","weight","height","url"
    ];

    public function team(): BelongsTo
    {
        return $this->belongsTo(Team::class);
    }
}
