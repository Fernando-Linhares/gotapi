<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'house_id'];

    protected $with = ['house'];

    public function house()
    {
        return $this->belongsTo(House::class);
    }
}
