@extends('layout')

@section('content')
    <div class="page-header">
        <h1>Notes App</h1>
        <a class="btn btn-success" href="{{url('/notes/create')}}">New Note</a>
    </div>

    @if (count($notes) >= 1)
        @foreach ($notes as $note)


            <div class="card">
                <div class="card-header">
                    <h2 class="h4 card-title">{{$note->title}}</h2>
                    <div class="controls">
                        <a href="{{url('/notes/delete/' . $note->id)}}" class="btn btn-danger"><i class="fa fa-trash-o"></i></a>
                    </div>
                </div>
                <div class="card-body">
                    <p class="card-text">{{$note->body}}</p>
                </div>
            </div>


        @endforeach  
    @else
        <h3>Click new note to get started!</h3>
    @endif

@endsection