<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'price'
    ];

    /**
     * Get the user that owns the book.
     */

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
