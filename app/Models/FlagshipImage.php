<?php

namespace App\Models;

use App\Models\Flagship;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FlagshipImage extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'flagship_images';

    public function flagship()
    {
        return $this->belongsTo(Flagship::class);
    }
}
