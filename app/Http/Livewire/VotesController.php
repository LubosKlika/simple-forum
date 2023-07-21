<?php

namespace App\Http\Livewire;



use Livewire\Component;


class VotesController extends Component
{




    public $voting; // $question || $comment
    protected $listeners = ['voted' => '$refresh',
    'commentCreated' => '$refresh' ];


    public function vote($vote)
    {

                //Ověření zda je uživatel přihlášený, aby mohl hlasovat
                if(auth()->check()){
                 
                    $alreadyVoted = $this->voting->votes()->where('user_id', auth()->id())->first();

                
                    if ($alreadyVoted) {

                        // Pokud již uživatel hlasoval a klikne znovu na stejnou možnost (upvote/downvote) -> smaže se jeho hlas
                        if ($alreadyVoted->vote === $vote) {
                            $alreadyVoted->delete();

                        } 
                        // Pokud klikne na druhou možnost -> aktualizuje se jeho hlas
                        else {
                            $alreadyVoted->update(['vote' => $vote]);
                        }
                    } else {
                        // Pokud uživatel ještě nehlasoval -> zapíše se jeho hlas
                        $this->voting->votes()->create([
                            'user_id' => auth()->id(),
                            'vote' => $vote
                        ]);
                    }

                    //Refreshnutí componenty na ukázání aktuálního stavu
                    $this->emit('voted');}
                    
                    else {

                        return redirect('/login');
                }
    }




    public function render()
    {
        return view('livewire.votes-controller');
    }
}
