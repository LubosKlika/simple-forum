@extends('layout')



@section('content')

<div class="container mb-5" style="margin-top:150px; margin-bottom:150px; max-width:850px">


<div class="card" >
    
    <div class="card-body text-center">
      <h5 class="card-title">Název:</h5>
      <p class="card-text">{{ $question->title}}</p>
      <h5 class="card-title">Otázka:</h5>
      <p class="card-text">{{ $question->content}}</p>
    </div>
    <div class="card-body">
        @if(optional($question->user)->id)
          <a class="card-link " href="/users/{{ $question->user->id}}"><b><u> {{ $question->user->name}} </u></b></a>
        @else 
        <b><u> Smazaný uživatel</u></b>
        @endif
        <p class="card-text"> {{ $question->created_at}}</p>
      </div>

  </div>


</div>
@livewire('comments',['question_id' => $question->id])

@endsection