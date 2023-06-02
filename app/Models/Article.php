<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Article extends Model
{
    use HasFactory;

    protected $fillable = ["title", "slug", "short_url", "body", "ld_json", "created_by"];

    public function createdByUser(): BelongsTo
    {
        return $this->belongsTo(User::class, "created_by", "id");
    }
}
