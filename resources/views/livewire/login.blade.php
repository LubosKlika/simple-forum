<div>
   
    
    <div class="container" style="margin-top:150px;max-width:550px;">
    <form wire:submit.prevent="login">
        <h1 class="text-center mb-5">Přihlásit se</h1>
        <!-- Email input -->
        @error('email')
        <p class="text-red-500 tex-xs mt-1"> {{$message}}</p>
        @enderror
        <div class="form-outline mb-4">
          <input wire:model.defer="email" type="email" class="form-control" />
          <label class="form-label" >Email</label>
        </div>
      
        <!-- Password input -->
        @error('password')
        <p class="text-red-500 tex-xs mt-1"> {{$message}}</p>
        @enderror
        <div class="form-outline mb-4">
          <input wire:model.defer="password" type="password" class="form-control" />
          <label class="form-label" >Heslo</label>
        </div>
      
      
      
        <!-- Submit button -->
        <button type="submit" class="btn btn-primary btn-block mb-4">Přihlásit se</button>
      

    </form>
</div>

</div>
