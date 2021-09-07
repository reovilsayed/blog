@extends('layouts.app')
@section('title','Home')
@section('css')
<style>
    body{

    }
</style>
@endsection
@section('content')
<main role="main">
    <div class="Blog py-5 bg-light">
      <div class="container">
        <div class="row">
        @foreach ($posts as $post)
          <div class="col-md-4">
            <div class="card mb-4 box-shadow">
              <img class="card-img-top" src="{{asset('storage/'.$post->image)}}" alt="Card image cap">
              <div class="card-header">{{$post->title}}</div>
              <div class="card-body">
                <p class="card-text">{{$post->description}}</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <a type="button" class="btn btn-sm btn-outline-secondary" href="single.html">View</a>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                  </div>
                  <small class="text-muted">9 mins</small>
                </div>
              </div>
            </div>
          </div>
        @endforeach
        </div>
      </div>
    </div>
  </main>
@endsection
@section('javascript')
<script>
    var test='test';
</script>
@endsection
