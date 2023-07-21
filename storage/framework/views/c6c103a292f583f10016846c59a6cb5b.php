














<div>
    <?php if(auth()->guard()->check()): ?>
        <button wire:click="vote(1)" class="<?php echo e(auth()->user()->votes()->where('voting_id', $voting->id)->where('voting_type', get_class($voting))->value('vote') === 1 ? 'btn btn-primary btn-block upVote' : 'btn btn-primary btn-block'); ?>">Upvote</button>
        <button wire:click="vote(-1)" class="<?php echo e(auth()->user()->votes()->where('voting_id', $voting->id)->where('voting_type', get_class($voting))->value('vote') === -1 ? 'btn btn-primary btn-block downVote' : 'btn btn-primary btn-block'); ?>">Downvote</button>
    <?php endif; ?>    
    <?php if(auth()->guard()->guest()): ?>
    
     <button class="btn btn-primary btn-block "><a href="/login">UpVote</a></button>   
     <button class="btn btn-primary btn-block "><a href="/login">DownVote</a></button>   
    <?php endif; ?>
    <p>Hodnocení: <?php echo e($voting->votes->sum('vote')); ?></p>


</div>
<?php /**PATH D:\laragon\www\simple-forum\resources\views/livewire/votes-controller.blade.php ENDPATH**/ ?>