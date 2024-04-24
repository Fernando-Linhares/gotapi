<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'locale_id', 'description'];

    protected $with = ['locale'];

    public function locale()
    {
        return $this->belongsTo(Locale::class);
    }

    public function characters()
    {
        return $this->belongsToMany(Character::class);
    }
}
