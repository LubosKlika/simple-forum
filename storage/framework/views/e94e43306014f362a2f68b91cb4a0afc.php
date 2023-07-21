



<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
   
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item active">
            <a class="nav-link" href="/">Domů </a>
            </li>


            <li class="nav-item">
                <?php if(auth()->guard()->guest()): ?>
                <a class="nav-link" href="/create-user">Registrace</a> 
                <?php endif; ?>
                <?php if(auth()->guard()->check()): ?>
                <a class="nav-link" href="/create-user">Přidání uživatele</a> 
                <?php endif; ?>
            </li>
            <li class="nav-item">
                <?php if(auth()->guard()->guest()): ?>
                <a class="nav-link" href="/login">Přihlásit se</a>
                     
            </li>
                <?php endif; ?>    
                <?php if(auth()->guard()->check()): ?>
            <li class="nav-item">
            <a class="nav-link" href="/users">Všichni uživatelé</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="/create-question">Přidat otázku</a>
            </li>


                <li class="nav-item">
                    <form method="POST" action="/logout" >
                        <?php echo csrf_field(); ?>
                        <button type="submit">
                        <a class="nav-link" >Odhlásit se</a>
                        </button>
                    </form>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/users/<?php echo e(auth()->user()->id); ?>"><?php echo e(auth()->user()->name); ?></a>
                </li>
                <?php endif; ?>
            
      

        </ul>
        </div>
    </div>
  </nav><?php /**PATH D:\laragon\www\simple-forum\resources\views/partials/_navbar.blade.php ENDPATH**/ ?>