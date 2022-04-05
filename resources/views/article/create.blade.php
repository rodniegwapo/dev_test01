@extends('layouts.app')

@section('content')

    <h1>Create form</h1>


    <form method="POST"  action="/storeArticle">
    @csrf
    <div>
        <label for="">title</label>
        <input type="text" name="title">
        @error('title')
        <p>{{$errors -> first('title')}}</p>
        @enderror
    </div>
    <div>
        <label for="">Description</label>
        <textarea type="text" name="body"> </textarea>
    </div>
    
    <div>
        <a href="/home">Back</a>
        <button type="submit"> Submit</button>
    </div>
    
    </form>

@endsection