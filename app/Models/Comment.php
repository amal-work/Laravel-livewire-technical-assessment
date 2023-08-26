<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $table = 'user_comments';

    protected $fillable = [
        'marks', 'description', 'user_id'
    ];    
}
