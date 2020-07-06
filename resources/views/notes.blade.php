@extends('layout')

@section('content')
    <h1>Notes</h1>
    @foreach ($notes as $note)


        <div class="card">
            <div class="card-body">
                {{$note->body}}
            </div>
        </div>


    @endforeach
@endsection