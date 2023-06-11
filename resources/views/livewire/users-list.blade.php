<div>
    
    





    <div class="container" style="margin-top:150px">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Jméno</th>
                <th scope="col">Email</th>
                <th scope="col">Vytvořen</th>
             
                @auth
            
                <th scope="col">Smazat</th>
                @endauth
              </tr>
            </thead>
            <tbody>
        
          @forelse ($users as $user)
              <tr>
                <th scope="row"> </th>




                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>  {{ date('d.m.Y H:i', strtotime($user->created_at)) }}  </td>
                    @auth
                    
                 
                    <td><div wire:click="deleteUser({{ $user->id }})" class="btn btn-danger">Smazat</div></td>

                    @endauth
          


              </tr>
              @empty
        <tr>
          <th></th>
            <td >Žádná data</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
          @endforelse
          
        </tbody>
        
      </table>
      @if ($users->hasPages())
      {{ $users->links()}}
      @endif
        </div>


</div>
