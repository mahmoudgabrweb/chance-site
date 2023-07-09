<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Event extends Model
{
    use HasFactory;

    protected $fillable = ["title", "start_date", "end_date", "address", "description"];

    public function images(): MorphMany
    {
        return $this->morphMany(Image::class, "reference");
    }
}
