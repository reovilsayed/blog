@extends('layouts.app')
@section('title','Single blog')
@section('content')
    <main role="main">
      <div class="Blog pt-5 bg-light">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

	  <div class="Blog py-1 bg-light">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="card mb-4 box-shadow">
                <div class="card-body">
                  <form action="">
				     <div class="form-group">
					    <label for="comment">Comment</label>
						<textarea name="" id="" cols="30" rows="4" class="form-control"></textarea>
					 </div>
				     <div class="form-group">
					    <button type="submit" class="btn btn-info">Submit</button>
					 </div>
				  </form>
                </div>
              </div>
            </div>
            <div class="col-md-8">
              <div class="card mb-4 box-shadow">
                <div class="card-body">
				   <h4 class="font-weight-bold">Sayed Khan</h4>
				   <p>This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
@endsection
