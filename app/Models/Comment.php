<?php

namespace App\Models;

use App\Models\User;
use App\Models\Vote;
use App\Models\Question;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comment extends Model
{
    protected $fillable = ['user_id','question_id','content'];
    
    use HasFactory;



    public function question()
    {
        return $this->belongsTo(Question::class, 'question_id');
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
