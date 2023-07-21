<?php $__env->startSection('content'); ?>

<div class="container mb-5" style="margin-top:150px; margin-bottom:150px; max-width:850px">


<div class="card" >
    
    <div class="card-body text-center">
      <h5 class="card-title">Název:</h5>
      <p class="card-text"><?php echo e($question->title); ?></p>
      <h5 class="card-title">Otázka:</h5>
      <p class="card-text"><?php echo e($question->content); ?></p>

    </div>
    <div class="card-body d-flex flex-column">
        <?php if(optional($question->user)->id): ?>
          <a class="card-link " href="/users/<?php echo e($question->user->id); ?>"><b><u> <?php echo e($question->user->name); ?> </u></b></a>
        <?php else: ?> 
        <b><u> Smazaný uživatel</u></b>
        <?php endif; ?>
        <p class="card-text"> <?php echo e($question->created_at); ?></p>
        <div class="text-end"> <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('votes-controller', ['voting' => $question])->html();
} elseif ($_instance->childHasBeenRendered('GQcHqYR')) {
    $componentId = $_instance->getRenderedChildComponentId('GQcHqYR');
    $componentTag = $_instance->getRenderedChildComponentTagName('GQcHqYR');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('GQcHqYR');
} else {
    $response = \Livewire\Livewire::mount('votes-controller', ['voting' => $question]);
    $html = $response->html();
    $_instance->logRenderedChild('GQcHqYR', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?></div>
      </div>
  </div>


</div>
<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('comments',['question_id' => $question->id])->html();
} elseif ($_instance->childHasBeenRendered('S3AogT5')) {
    $componentId = $_instance->getRenderedChildComponentId('S3AogT5');
    $componentTag = $_instance->getRenderedChildComponentTagName('S3AogT5');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('S3AogT5');
} else {
    $response = \Livewire\Livewire::mount('comments',['question_id' => $question->id]);
    $html = $response->html();
    $_instance->logRenderedChild('S3AogT5', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\simple-forum\resources\views/main/question.blade.php ENDPATH**/ ?>