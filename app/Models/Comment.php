<?php

namespace App\Models;

use App\Models\Idea;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comment extends Model
{
    use HasFactory;

    protected $perPage = 10;
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function idea(): BelongsTo
    {
        return $this->belongsTo(Idea::class);
    }

}
