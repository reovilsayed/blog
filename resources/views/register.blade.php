@extends('layouts.app')
@section('title','Register')
@section('content')
<main role="main">
    <div class="container pt-3">
       <div class="row pt-5 justify-content-center">
           <div class="col-md-8">
               <div class="card mb-4 box-shadow">
                   <div class="card-header">
                       Register
                   </div>
                   <div class="card-body">
                       <form action="">
                           <div class="form-group">
                               <label for="name">Name</label>
                               <input type="text"id="name" class="form-control">
                           </div>
                           <div class="form-group">
                               <label for="email">Email</label>
                               <input type="email"id="email" class="form-control">
                           </div>
                           <div class="form-group">
                               <label for="password">Password</label>
                               <input type="password"id="password" class="form-control">
                           </div>
                           <div class="form-group">
                               <label for="password_confirmation">Confirm Password</label>
                               <input type="password"id="password" class="form-control">
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
