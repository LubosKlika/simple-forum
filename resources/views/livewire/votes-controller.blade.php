














<div>
    @auth
        <button wire:click="vote(1)" class="{{ auth()->user()->votes()->where('voting_id', $voting->id)->where('voting_type', get_class($voting))->value('vote') === 1 ? 'btn btn-primary btn-block upVote' : 'btn btn-primary btn-block' }}">Upvote</button>
        <button wire:click="vote(-1)" class="{{ auth()->user()->votes()->where('voting_id', $voting->id)->where('voting_type', get_class($voting))->value('vote') === -1 ? 'btn btn-primary btn-block downVote' : 'btn btn-primary btn-block' }}">Downvote</button>
    @endauth    
    @guest
    
     <button class="btn btn-primary btn-block "><a href="/login">UpVote</a></button>   
     <button class="btn btn-primary btn-block "><a href="/login">DownVote</a></button>   
    @endguest
    <p>Hodnocení: {{ $voting->votes->sum('vote') }}</p>


</div>
