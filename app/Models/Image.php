<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Image extends Model
{
    use HasFactory;

    protected $fillable = ['reference_type', "reference_id", "image_title"];

    public function images(): MorphTo
    {
        return $this->morphTo();
    }
}
