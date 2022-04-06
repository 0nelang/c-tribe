<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class metadata extends Model
{
    use HasFactory;
    protected $table = 'metadata';
    protected $guarded = ['id'];
    public $timestamps = false;

    /**
     * Get the user that owns the Metadata
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'id', 'user_id');
    }
}
