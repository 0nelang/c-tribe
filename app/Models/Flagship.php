<?php

namespace App\Models;

// use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Flagship extends Model
{
    use HasFactory;
    protected $table = 'flagships';
    protected $guarded = ['id'];

    public function otherImage()
    {
        return $this->hasMany('App\Models\FlagshipImage', 'flagship');
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
