@extends('layouts.app')
@section('title','Posts')
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
           <table class="table table-striped">
               <thead>
                 <tr>
                   <th scope="col">Title</th>
                   <th scope="col">Created At</th>
                   <th scope="col">Action</th>
                 </tr>
               </thead>
               <tbody>
                 <tr>
                   <th scope="row">Lorem ipsom</th>
                   <td>10 july 2021</td>
                   <td>
                       <a href="" class="btn btn-danger btn-sm">Delete</a>
                       <a href="" class="btn btn-info btn-sm">Edit</a>
                   </td>
                 </tr>
                 <tr>
                   <th scope="row">Lorem ipsom</th>
                   <td>10 july 2021</td>
                   <td>
                       <a href="" class="btn btn-danger btn-sm">Delete</a>
                       <a href="" class="btn btn-info btn-sm">Edit</a>
                   </td>
                 </tr>
                 <tr>
                   <th scope="row">Lorem ipsom</th>
                   <td>10 july 2021</td>
                   <td>
                       <a href="" class="btn btn-danger btn-sm">Delete</a>
                       <a href="" class="btn btn-info btn-sm">Edit</a>
                   </td>
                 </tr>
                 <tr>
                   <th scope="row">Lorem ipsom</th>
                   <td>10 july 2021</td>
                   <td>
                       <a href="" class="btn btn-danger btn-sm">Delete</a>
                       <a href="" class="btn btn-info btn-sm">Edit</a>
                   </td>
                 </tr>
                 <tr>
                   <th scope="row">Lorem ipsom</th>
                   <td>10 july 2021</td>
                   <td>
                       <a href="" class="btn btn-danger btn-sm">Delete</a>
                       <a href="" class="btn btn-info btn-sm">Edit</a>
                   </td>
                 </tr>
                 <tr>
                   <th scope="row">Lorem ipsom</th>
                   <td>10 july 2021</td>
                   <td>
                       <a href="" class="btn btn-danger btn-sm">Delete</a>
                       <a href="" class="btn btn-info btn-sm">Edit</a>
                   </td>
                 </tr>
               </tbody>
             </table>
        </div>
    </div>
    </div>
</main>
@endsection
