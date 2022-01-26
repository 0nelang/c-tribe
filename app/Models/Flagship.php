<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flagship extends Model
{
    use HasFactory;
    protected $table = 'flagships';
    protected $guarded = ['id'];

    public function otherImage()
    {
        return $this->hasMany('App\Models\FlagshipImage', 'flagship');
    }
}
