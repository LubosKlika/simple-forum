<div>





    <div class="row d-flex justify-content-center" style="margin-bottom:150px">
        <div class="col-md-8 col-lg-6">
          <div class="card shadow-0 border" style="background-color: #f0f2f5;">
            <div class="card-body p-4">
                @guest
                <h4 class="text-center mb-4">Pro napsání komentáře se <a href="/login">Přihlašte</a> nebo <a href="/create-user">Registrujte</a></h4>
                @endguest
                @auth
                    <form wire:submit.prevent="createComment">
                            <div class="form-outline mb-4">
                                <input wire:model.defer="comment" type="text" id="addANote" class="form-control" placeholder="Napište komentář..." />
                                <button type="submit" class="btn btn-danger mt-3">Přidat komentář</button>
                            </div>
                    </form>
                @endauth
                @forelse($comments as $comment)
                    <div class="card mb-4">
                        <div class="card-body">
                 
                                <h3 class="text-center">
                                    
                                    @if(optional($comment->user)->id) 
                                    <a href="/users/{{ $comment->user->id}}"><b><u> {{ $comment->user->name}} </u></b></a> 
                                    @else {{-- Pokud byl uživatel smazán user_id == NULL --}}
                                    Smazaný uživatel
                                    @endif
                                
                                
                                </h3>
                                <p class="text-center small text-muted mb-3"> {{ date('d.m.Y H:i', strtotime($comment->created_at)) }}     </p>
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex flex-row align-items-center ">
                                    
                                        <p class="small mb-0 ms-2">  {{ $comment->content }}  </p>
                                    </div>
                                </div>
                                
                                
                            </div>
                        </div>
                                      
                        <div class="text-end me-4"> @livewire('votes-controller', ['voting' => $comment], key($comment->id)){{-- Klíč kvůli foreach a vyvolání $refresh --}}
                        </div>
                        @empty
                        <h4> Žádné komentáře</h4>
            @endforelse
            @if ($comments->hasPages())
            {{ $comments->links() }}
             @endif

            </div>
          </div>
        </div>
      </div>
</div>
