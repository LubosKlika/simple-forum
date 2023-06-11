<?php

namespace App\Models;

use App\Models\Comment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Question extends Model
{
    use HasFactory;

    protected $fillable = ['users_id','title','content'];

    public function comment()
    {
        return $this->hasMany(Comment::class, 'question_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id');
    }

}
