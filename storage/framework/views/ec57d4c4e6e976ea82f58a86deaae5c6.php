<?php $__env->startSection('content'); ?>








<section class="vh-100" style="background-color: #9de2ff;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-md-9 col-lg-7 col-xl-5">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-4">
              <div class="d-flex text-black">
                <div class="flex-shrink-0">

                </div>
                <div class="flex-grow-1 ms-3">
                  
                  <h5 class="mb-1">Jméno: <?php echo e($user->name); ?></h5>
                  <p class="mb-2 pb-1" style="color: #2b2a2a;">Email: <?php echo e($user->email); ?></p>
               
                  <div class="d-flex pt-1">
                   Vytvořen: <?php echo e(date('d.m.Y H:i', strtotime($user->created_at))); ?> 
                  
                  </div>
              
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\simple-forum\resources\views/main/user-profile.blade.php ENDPATH**/ ?>