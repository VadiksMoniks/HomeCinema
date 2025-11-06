<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $table = "tags";
    protected $fillable = [
        'name_en',
        'name_ua',
    ];

    public $timestamps = false;

    public function films()
    {
        return $this->belongsToMany(Film::class);
    }

    public function people()
    {
        return $this->belongsToMany(Person::class);
    }
}
