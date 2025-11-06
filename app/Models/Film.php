<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;

    protected $table = "films";
    protected $fillable = [
        'status',
        'name_ua',
        'name_en',
        'description_ua',
        'description_en',
        'poster',
        'screenshots',
        'trailer_url',
        'year',
        'start_date',
        'end_date',
    ];

    public $timestamps = false;

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function people()
    {
        return $this->belongsToMany(Person::class);
    }
}
