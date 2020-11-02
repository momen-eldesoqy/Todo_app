@extends('layouts.app')

@section('title','one post')
    
@section('content')
    <div class="container">
        <div class="row justify-content-center pt-3">
            <div class="card" style="width: 50%">
                <div class="card-header text-center">
                <h1>{{($todos->completed)?'completed':'under work'}}</h1>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item">id : {{$todos->id}}</li>
                        <li class="list-group-item">title : {{$todos->title}}</li>
                        <li class="list-group-item">description : {{$todos->description}}</li>
                        
                    </ul>
                </div>
            </div>    
        </div>    
    </div>    
@endsection
  