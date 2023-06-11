<div>
   



    <div class="container" style="max-width:550px; margin-top:150px;">
    <form wire:submit.prevent="createQuestion">
        <h1 class="text-center mb-5">Vytvořit otázku</h1>
        <div class="form-outline mb-4">
            @error('title') <span class="error">{{ $message }}</span> @enderror
          <input wire:model.defer="title" type="text" class="form-control" />
          <label class="form-label" >Titulek</label>
        </div>
      

    
        <div class="form-outline mb-4">
            @error('content') <span class="error">{{ $message }}</span> @enderror
          <textarea wire:model.defer="content" class="form-control"  rows="4"></textarea>
          <label class="form-label" >Obsah</label>
        </div>
      
       
    
        <button type="submit" class="btn btn-primary btn-block mb-4">Vytvořit</button>
      </form>


    </div>
</div>
