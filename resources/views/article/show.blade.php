@extends('layouts.app')

@section('content')

  

    <h5>Title: {{$article->title}}</h5>
    <div>Descriptions: {{$article->body}}</div>
    <br>
  
    <h4>Author: {{$article->user->name}}</h4>

@endsection