<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;

    protected $table = "people";
    protected $fillable = [
        'name_en',
        'name_ua',
        'type',
        'photo',
    ];

    public $timestamps = false;

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function films()
    {
        return $this->belongsToMany(Film::class);
    }
}
