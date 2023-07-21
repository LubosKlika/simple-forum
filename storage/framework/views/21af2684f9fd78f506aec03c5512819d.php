
<!DOCTYPE html>
<html lang="cs">
<head>

    <?php echo \Livewire\Livewire::styles(); ?>

    <?php echo $__env->make('partials._head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>
<body > 
    
       <?php echo $__env->make('partials._navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php echo $__env->yieldContent('content'); ?>
       
                     <?php echo \Livewire\Livewire::scripts(); ?>



    <?php echo $__env->make('partials._footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html><?php /**PATH D:\laragon\www\simple-forum\resources\views/layout.blade.php ENDPATH**/ ?>