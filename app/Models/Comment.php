<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Comment extends Model
{
    use HasFactory;
    protected $table = 'user_comments';

    protected $fillable = [
        'marks', 'description', 'user_id'
    ];    
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
