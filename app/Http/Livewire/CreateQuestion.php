<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Question;
use Illuminate\Support\Facades\Log;

class CreateQuestion extends Component
{


    public $title;
    public $content;


    public function createQuestion (){
        $this->validate([
            'title' => 'required|max:120',
            'content' => 'required'


        ]);

      
        $questions = Question::create([
            'users_id' => auth()->id(),
            'title' => $this->title,
            'content' => $this->content
            
          
          ]);
          return redirect()->route('questions', ['questions' => $questions->id]);

        
        
    }
    public function render()
    {
        return view('livewire.create-question')->extends('layout');
    }
}
