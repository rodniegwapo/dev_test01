@extends('layouts.app')

@section('content')

    <h1>Create form</h1>


    <form method="post"  action="/update/{{$article->id}}">
    @csrf
    <div>
        <label for="">title</label>
        <input type="text" name="title" value="{{$article->title}}">
        @error('title')
        <p>{{$errors -> first('title')}}</p>
        @enderror
    </div>
    <div>
        <label for="">body</label>
        <textarea type="text" name="body" >{{$article->body}} </textarea>
    </div>
    
    <div>
        <a href="/home">Back</a>
        <button type="submit"> Submit</button>
    </div>
    
    </form>

@endsection