<div>





    <div class="row d-flex justify-content-center" style="margin-bottom:150px">
        <div class="col-md-8 col-lg-6">
          <div class="card shadow-0 border" style="background-color: #f0f2f5;">
            <div class="card-body p-4">
                <?php if(auth()->guard()->guest()): ?>
                <h4 class="text-center mb-4">Pro napsání komentáře se <a href="/login">Přihlašte</a> nebo <a href="/create-user">Registrujte</a></h4>
                <?php endif; ?>
                <?php if(auth()->guard()->check()): ?>
                    <form wire:submit.prevent="createComment">
                            <div class="form-outline mb-4">
                                <input wire:model.defer="comment" type="text" id="addANote" class="form-control" placeholder="Napište komentář..." />
                                <button type="submit" class="btn btn-danger mt-3">Přidat komentář</button>
                            </div>
                    </form>
                <?php endif; ?>
                <?php $__empty_1 = true; $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <div class="card mb-4">
                        <div class="card-body">
                 
                                <h3 class="text-center">
                                    
                                    <?php if(optional($comment->user)->id): ?> 
                                    <a href="/users/<?php echo e($comment->user->id); ?>"><b><u> <?php echo e($comment->user->name); ?> </u></b></a> 
                                    <?php else: ?> 
                                    Smazaný uživatel
                                    <?php endif; ?>
                                
                                
                                </h3>
                                <p class="text-center small text-muted mb-3"> <?php echo e(date('d.m.Y H:i', strtotime($comment->created_at))); ?>     </p>
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex flex-row align-items-center ">
                                    
                                        <p class="small mb-0 ms-2">  <?php echo e($comment->content); ?>  </p>
                                    </div>
                                </div>
                                
                                
                            </div>
                        </div>
                                      
                        <div class="text-end me-4"> <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('votes-controller', ['voting' => $comment])->html();
} elseif ($_instance->childHasBeenRendered($comment->id)) {
    $componentId = $_instance->getRenderedChildComponentId($comment->id);
    $componentTag = $_instance->getRenderedChildComponentTagName($comment->id);
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild($comment->id);
} else {
    $response = \Livewire\Livewire::mount('votes-controller', ['voting' => $comment]);
    $html = $response->html();
    $_instance->logRenderedChild($comment->id, $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <h4> Žádné komentáře</h4>
            <?php endif; ?>
            <?php if($comments->hasPages()): ?>
            <?php echo e($comments->links()); ?>

             <?php endif; ?>

            </div>
          </div>
        </div>
      </div>
</div>
<?php /**PATH D:\laragon\www\simple-forum\resources\views/livewire/comments.blade.php ENDPATH**/ ?>