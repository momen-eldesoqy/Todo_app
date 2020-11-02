@extends('layouts.app')
@section('title','create post')
@section('content')
    <div class="container pt-5">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center">
                        <h1>Create a new Todo</h1>
                    </div>
                    <div class="card-body">
                        <form action="create" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputPassword1">Title</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" id="exampleInputPassword1" name="title" value="{{old('title')}}">
                                @error('title')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                              <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Description</label>
                                    <textarea class="form-control @error('description') is-invalid @enderror" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
                                    @error('description')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                              </div>
                              <div class="form-group">
                                  <button type="submit" class="btn btn-success" style="width: 40%;">Create</button>
                              </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection