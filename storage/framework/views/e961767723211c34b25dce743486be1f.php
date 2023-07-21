<div>
   



    <div class="container" style="max-width:550px; margin-top:150px;">
    <form wire:submit.prevent="createQuestion">
        <h1 class="text-center mb-5">Vytvořit otázku</h1>
        <div class="form-outline mb-4">
            <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="error"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
          <input wire:model.defer="title" type="text" class="form-control" />
          <label class="form-label" >Titulek</label>
        </div>
      

    
        <div class="form-outline mb-4">
            <?php $__errorArgs = ['content'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="error"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
          <textarea wire:model.defer="content" class="form-control"  rows="4"></textarea>
          <label class="form-label" >Obsah</label>
        </div>
      
       
    
        <button type="submit" class="btn btn-primary btn-block mb-4">Vytvořit</button>
      </form>


    </div>
</div>
<?php /**PATH D:\laragon\www\simple-forum\resources\views/livewire/create-question.blade.php ENDPATH**/ ?>