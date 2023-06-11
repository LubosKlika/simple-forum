@extends('layout')



@section('content')

<div class="container" style="margin-top:150px">

    <div class="container ">
        <div class="row">
          <!-- Main content -->
          <div class="col-lg-12 mb-3">
            @forelse($questions as $question)
           
                        <div class="card row-hover pos-relative py-3 px-3 mb-3 border-warning border-top-0 border-right-0 border-bottom-0 rounded-0">
                            <div class="row align-items-center">
                                <div class="col-md-8 mb-3 mb-sm-0">
                                <h5>
                                    <a  class="text-primary"><a href="/question/{{$question->id}} " data-toggle="collapse" data-target=".forum-content" class="text-body">
                                        {{ $question->title }}</a></a>
                                </h5>
                                <p class="text-sm"><span class="op-6">Vytvořeno</span> <a class="text-black" >{{ date('d.m.Y H:i', strtotime($question->created_at)) }}</a> <span class="op-6">uživatelem</span> 
                                    @if(optional($question->user)->id)
                                    <a class="text-black" href="/users/{{ $question->user->id }}">{{$question->user->name}}</a></p>

                                    @else
                                   Smazaný uživatel</p>
                                    @endif
                                <div class="text-sm op-5">  {{ Str::limit($question->content, 100)}} </div>
                                </div>


                               
                            </div>
                        </div>
          

            @empty
            <h4 class="text-center">Žádné otázky</h4>
            @guest
            <h4 class="text-center">Pro přidání otázek se <a href="/login">Přihlašte</a> nebo <a href="/create-user">Registrujte</a></h4>
            @endguest
            @auth
            @endauth
            <h4 class="text-center"><a href="/create-question">Vytvořit otázku</a></h4>
            @endforelse
            @if ($questions->hasPages())
                {{$questions->links()}}
            @endif
          </div>

        </div>
    </div>

</div>


@endsection