<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Record extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'summary',
        'rating',
        'review',
    ];

    /**
     * Get the book that owns the record.
     */
    public function book(): BelongsTo
    {
        return $this->BelongsTo(Book::class);
    }
}
