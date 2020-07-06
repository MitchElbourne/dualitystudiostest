@extends('layout')

@section('content')
    <div class="page-header">
        <h1>New Note</h1>
        <a class="btn btn-primary" href="{{url('/')}}">Back</a>
    </div>
    <form method="POST" action="/notes" id="note-form">
        @csrf
        <div class="input-wrapper">
            <label for="title">Title</label>
            <input name="title" type="text" class="{{$errors->has('title') ? 'error-field' : ''}}">

            @error('title')
                <p class="error">{{$errors->first('title')}}</p>
            @enderror

        </div>
        <div class="input-wrapper">
            <textarea name="body" id="note-textarea"></textarea>
        </div>
        
        <button class="btn btn-success" type="submit">Create!</button>
    </form>
@endsection