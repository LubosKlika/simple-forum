<div>
    
    





    <div class="container" style="margin-top:150px">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Jméno</th>
                <th scope="col">Email</th>
                <th scope="col">Vytvořen</th>
             
                <?php if(auth()->guard()->check()): ?>
            
                <th scope="col">Smazat</th>
                <?php endif; ?>
              </tr>
            </thead>
            <tbody>
        
          <?php $__empty_1 = true; $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
              <tr>
                <th scope="row"> </th>




                <td><?php echo e($user->name); ?></td>
                <td><?php echo e($user->email); ?></td>
                <td>  <?php echo e(date('d.m.Y H:i', strtotime($user->created_at))); ?>  </td>
                    <?php if(auth()->guard()->check()): ?>
                    
                 
                    <td><div wire:click="deleteUser(<?php echo e($user->id); ?>)" class="btn btn-danger">Smazat</div></td>

                    <?php endif; ?>
          


              </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <tr>
          <th></th>
            <td >Žádná data</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
          <?php endif; ?>
          
        </tbody>
        
      </table>
      <?php if($users->hasPages()): ?>
      <?php echo e($users->links()); ?>

      <?php endif; ?>
        </div>


</div>
<?php /**PATH D:\laragon\www\simple-forum\resources\views/livewire/users-list.blade.php ENDPATH**/ ?>