@extends('layouts.app')
@section('title','Login')
@section('content')
<main role="main">
    <div class="container pt-3">
       <div class="row pt-5 justify-content-center">
           <div class="col-md-8">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
               <div class="card mb-4 box-shadow">
                   <div class="card-header">
                       Login
                   </div>
                   <div class="card-body">
                       <form action="{{route('login')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" value="{{old('email')}}" id="email" name="email" class="form-control @error('email') is-invalid @enderror">
                            @error('email')
                             <span class="invalid-feedback">
                                  <strong>{{$message}}</strong>
                             </span>
                            @enderror
                        </div>
                           <div class="form-group">
                               <label for="password">Password</label>
                               <input type="password"id="password" name="password" class="form-control  @error('password') is-invalid @enderror">
                               @error('password')
                               <span class="invalid-feedback">
                                    <strong>{{$message}}</strong>
                               </span>
                              @enderror
                           </div>
                           <div class="form-group">
                              <button type="submit" class="btn btn-info">Submit</button>
                           </div>
                       </form>
                   </div>
               </div>
           </div>
       </div>
    </div>
</main>
@endsection
