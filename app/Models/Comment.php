<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['users_id','question_id','content'];
    
    use HasFactory;



    public function question()
    {
        return $this->belongsTo(Question::class, 'question_id');
    }


    public function user()
    {
        return $this->belongsTo(User::class, 'users_id');
    }



}
