@extends('layout')

@section('content')
    <div class="header">
        <h1>New note</h1>
    </div>
    <form method="POST" action="/notes" id="create-note-form">
        @csrf
        <div class="input-wrapper">
            <label for="title">Title</label>
            <input name="title" type="text" class="{{$errors->has('title') ? 'error-field' : ''}}">

            @error('title')
                <p class="error">{{$errors->first('title')}}</p>
            @enderror
        </div>
        <div class="input-wrapper">
            <textarea name="body" cols="30" rows="10"></textarea>
        </div>
        
        <button class="btn btn-success" type="submit">Create!</button>
    </form>
@endsection