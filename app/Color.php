<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['hex'];

    /**
     * Get the color hex.
     *
     * @return string
     */
    protected function getColorAttribute()
    {
        return $this->hex ?? $this->default;
    }
}
