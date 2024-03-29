<?php

namespace App\Http\Livewire;


use App\Models\Comment;
use Livewire\Component;
use Livewire\WithPagination;

class Comments extends Component
{

    use WithPagination;
    protected $paginationTheme = 'bootstrap';


    protected $comments;
    public $comment;
    public $question_id;
    protected $listeners = ['commentCreated' => '$refresh'];

    public function mount($question_id){ 

  
        $this->question_id = $question_id;
    }


    public function createComment(){


        $this->validate(['comment' => 'required']);

         Comment::create([
            'user_id' => auth()->id(),
            'question_id' => $this->question_id,
            'content' => $this->comment,
        ]);
  
        $this->reset(['comment']);
        
        //Vyvolá listener a refreshne componentu -> komentáře i VotesController componentu 
         $this->emit('commentCreated');
      
    }



    public function render(){   

        $comments = Comment::with(['user','question'])->where('question_id', $this->question_id)->orderBy('created_at','desc')->paginate(5);
        
        return view('livewire.comments',['comments' => $comments]);
    }
}
