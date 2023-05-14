<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Slider extends Model
{
    use HasFactory;

    protected $fillable = ["header", "title", "link", "description"];

    public function gallery(): MorphOne
    {
        return $this->morphOne(Gallery::class, "reference");
    }
}
