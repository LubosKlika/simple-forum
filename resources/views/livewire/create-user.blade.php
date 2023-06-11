<div>
  
    


 









<div class="container" style="margin-top:150px; max-width:550px;">
  @guest
  <h1 class="text-center mb-4">Registrace</h1>
  @endguest
  @auth
    <h1 class="text-center mb-4"> Přidat uživatele</h1>
    @endauth
    <form wire:submit.prevent="createUser"> 
        @error('name')
        <p class="text-red-500 tex-xs mt-1"> {{$message}}</p>
        @enderror
        <div class="form-outline mb-4">
          <input wire:model.defer="name" type="text"  class="form-control"  />
          <label class="form-label" >Jméno</label>
        </div>

        @error('email')
        <p class="text-red-500 tex-xs mt-1"> {{$message}}</p>
        @enderror
        <div class="form-outline mb-4">
          <input  wire:model.defer="email"  type="email"  class="form-control" />
          <label class="form-label" >Email</label>
        </div>
      
        @error('password')
        <p class="text-red-500 tex-xs mt-1"> {{$message}}</p>
        @enderror
        <div class="form-outline mb-4">
          <input wire:model.defer="password" type="password"  class="form-control" />
          <label class="form-label">Heslo</label>
        </div>


        @error('password_confirmation')
        <p class="text-red-500 tex-xs mt-1"> {{$message}}</p>
        @enderror
        <div class="form-outline mb-4">
          <input wire:model.defer="password_confirmation" type="password"  class="form-control" />
          <label class="form-label" >Opakovat heslo</label>
        </div>
      


        <button type="submit" class="btn btn-primary btn-block mb-4">Vytvořit</button>
      

    </form>

</div>

</div>
