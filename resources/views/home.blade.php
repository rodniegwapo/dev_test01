@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <!-- <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div> -->

                <div class="d-flex w-100 justify-space-between">
                    <div class="text-right"><a class="btn btn-primary" href="/createArticle">Add article</a></div>
                </div>
                <div>
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Author</th>
                        <th scope="col">Title</th>
                        <th scope="col">Descriptions</th>
                        <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                  
                        @foreach ($articles as $article)
                        <tr>
                        <th scope="row">{{$article->id}}</th>
                        <th scope="row">{{$article->user->name}}</th>
                        <td>{{$article->title}}</td>
                        <td>{{$article->body}}</td>
                        <td>
                            <span><a class="btn btn-primary small" href="/show/{{$article->id}}">show</a></span>
                            <span><a class="btn btn-info small {{$article->user_id == Auth::user()->id ? '' : 'disabled'}}" href="/edit/{{$article->id}}">edit</a></span>
                            <span ><a class="btn btn-danger small {{$article->user_id == Auth::user()->id ? '' : 'disabled'}} " href="/destroy/{{$article->id}}">delete</a></span>
                        </td>
                        </tr>
                        @endforeach
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
