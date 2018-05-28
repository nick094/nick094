@extends('layout')



@section('content')
<div class="col-sm-8">
	<h1>Publish a post</h1>

<hr>
	<form method="POST" action="/posts">
		{{ csrf_field()  }}
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="titile" aria-describedby="title" placeholder="Enter title" name="title">
   
  </div>
  <div class="form-group">
    <label for="body">Body</label>
    <input type="text" class="form-control" id="body" aria-describedby="body" placeholder="Enter body" name="body">
  </div>


  <button type="submit" class="btn btn-primary">Publish</button>
  @include('errors')
</form>

</div>
@endsection
