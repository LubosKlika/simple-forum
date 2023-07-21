<div>
   
    
    <div class="container" style="margin-top:150px;max-width:550px;">
    <form wire:submit.prevent="login">
        <h1 class="text-center mb-5">Přihlásit se</h1>
        <!-- Email input -->
        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <p class="text-red-500 tex-xs mt-1"> <?php echo e($message); ?></p>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        <div class="form-outline mb-4">
          <input wire:model.defer="email" type="email" class="form-control" />
          <label class="form-label" >Email</label>
        </div>
      
        <!-- Password input -->
        <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <p class="text-red-500 tex-xs mt-1"> <?php echo e($message); ?></p>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        <div class="form-outline mb-4">
          <input wire:model.defer="password" type="password" class="form-control" />
          <label class="form-label" >Heslo</label>
        </div>
      
      
      
        <!-- Submit button -->
        <button type="submit" class="btn btn-primary btn-block mb-4">Přihlásit se</button>
      

    </form>
</div>

</div>
<?php /**PATH D:\laragon\www\simple-forum\resources\views/livewire/login.blade.php ENDPATH**/ ?>