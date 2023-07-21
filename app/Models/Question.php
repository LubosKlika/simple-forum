<?php

namespace App\Models;

use App\Models\User;
use App\Models\Vote;
use App\Models\Comment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Question extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','title','content'];

    public function comments()
    {
        return $this->hasMany(Comment::class, 'question_id');
    }
    
    public function getTotalCommentsAttribute(){

      return   $this->comments()->count();

    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }



    public function votes()
    {
        return $this->morphMany(Vote::class, 'voting');
    }
}
