<?php $__env->startSection('content'); ?>

<div class="container" style="margin-top:150px">

    <div class="container ">
        <div class="row">
          <!-- Main content -->
          <div class="col-lg-12 mb-3">
            <?php $__empty_1 = true; $__currentLoopData = $questions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $question): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
           
                        <div class="card row-hover pos-relative py-3 px-3 mb-3 border-warning border-top-0 border-right-0 border-bottom-0 rounded-0">
                            <div class="row align-items-center">
                                <div class="col-md-8 mb-3 mb-sm-0">
                                <h5>
                                    <a  class="text-primary"><a href="/question/<?php echo e($question->id); ?>" data-toggle="collapse" data-target=".forum-content" class="text-body">
                                        <?php echo e($question->title); ?></a></a>
                                </h5>
                                <p class="text-sm"><span class="op-6">Vytvořeno</span> <a class="text-black" ><?php echo e(date('d.m.Y H:i', strtotime($question->created_at))); ?></a> <span class="op-6">uživatelem</span> 
                                    <?php if(optional($question->user)->id): ?>
                                        <a class="text-black" href="/users/<?php echo e($question->user->id); ?>"><?php echo e($question->user->name); ?></a></p>

                                    <?php else: ?>
                                        Smazaný uživatel</p>
                                    <?php endif; ?>
                                <div class="text-sm op-5">  <?php echo e(Str::limit($question->content, 100)); ?> </div>
                                </div>

                                <div class="text-end"><?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('votes-controller', ['voting' => $question])->html();
} elseif ($_instance->childHasBeenRendered($question->id)) {
    $componentId = $_instance->getRenderedChildComponentId($question->id);
    $componentTag = $_instance->getRenderedChildComponentTagName($question->id);
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild($question->id);
} else {
    $response = \Livewire\Livewire::mount('votes-controller', ['voting' => $question]);
    $html = $response->html();
    $_instance->logRenderedChild($question->id, $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?></div>
                                <div class="text-end">Počet komentářů: <?php echo e($question->total_comments); ?> </div>
                            </div>
                       
                        </div>
          

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <h4 class="text-center">Žádné otázky</h4>
            <?php if(auth()->guard()->guest()): ?>
            <h4 class="text-center">Pro přidání otázek se <a href="/login">Přihlašte</a> nebo <a href="/create-user">Registrujte</a></h4>
            <?php endif; ?>

            <?php if(auth()->guard()->check()): ?>
            <h4 class="text-center"><a href="/create-question">Vytvořit otázku</a></h4>
            <?php endif; ?>

            <?php endif; ?>
            
            <?php if($questions->hasPages()): ?>
                <?php echo e($questions->links()); ?>

            <?php endif; ?>
          </div>

        </div>
    </div>

</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\simple-forum\resources\views/main/mainPage.blade.php ENDPATH**/ ?>