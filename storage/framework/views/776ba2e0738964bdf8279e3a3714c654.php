<div>
  
    


 









<div class="container" style="margin-top:150px; max-width:550px;">
  <?php if(auth()->guard()->guest()): ?>
  <h1 class="text-center mb-4">Registrace</h1>
  <?php endif; ?>
  <?php if(auth()->guard()->check()): ?>
    <h1 class="text-center mb-4"> Přidat uživatele</h1>
    <?php endif; ?>
    <form wire:submit.prevent="createUser"> 
        <?php $__errorArgs = ['name'];
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
          <input wire:model.defer="name" type="text"  class="form-control"  />
          <label class="form-label" >Jméno</label>
        </div>

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
          <input  wire:model.defer="email"  type="email"  class="form-control" />
          <label class="form-label" >Email</label>
        </div>
      
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
          <input wire:model.defer="password" type="password"  class="form-control" />
          <label class="form-label">Heslo</label>
        </div>


        <?php $__errorArgs = ['password_confirmation'];
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
          <input wire:model.defer="password_confirmation" type="password"  class="form-control" />
          <label class="form-label" >Opakovat heslo</label>
        </div>
      


        <button type="submit" class="btn btn-primary btn-block mb-4">Vytvořit</button>
      

    </form>

</div>

</div>
<?php /**PATH D:\laragon\www\simple-forum\resources\views/livewire/create-user.blade.php ENDPATH**/ ?>