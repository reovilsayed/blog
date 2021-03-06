@extends('layouts.app')
@section('title','Add new post')
@section('content')

<main role="main">
    <div class="container pt-3">
    <div class="row">
        <div class="col-md-3">
           <ul class="list-group">
               <li class="list-group-item"><a href="posts.html">Posts</a></li>
               <li class="list-group-item"><a href="addpost.html">Add new</a></li>
               <li class="list-group-item">Logout</li>
           </ul>
        </div>
        <div class="col-md-9">
         @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if (session()->has('message'))
            <p class="text-success">{{session('message')}}</p>
        @endif
          <form action="{{route('add_new')}}" method="post" enctype="multipart/form-data">
            @csrf
              <div class="form-group">
                  <label for="title">Title</label>
                  <input type="text"id="title" class="form-control" name="title">
              </div>
              <div class="form-group">
                  <label for="thumbnail">Thumbnail</label>
                  <input type="file" id="thumbnail" class="form-control" name="image">
              </div>
              <div class="form-group">
                  <label for="description">Description</label>
                  <textarea id="description" class="form-control" name="description"></textarea>
              </div>
              <div class="form-group">
                 <button type="submit" class="btn btn-info">Submit</button>
              </div>
          </form>
        </div>
    </div>
    </div>
</main>
@endsection
