@extends('layout')



@section('content')
<div class="col-sm-8">
	<h1>Publish a post</h1>

<hr>

      @if(isset($post))
            <form method="POST" action="/post/{{$post->id}}/update">
          		{{ csrf_field()  }}
              {{ method_field('POST') }}
            <div class="form-group">
              <label for="title">Title</label>
              <input type="text" value="{{$post->title}}" class="form-control" id="titile" aria-describedby="title" name="title">
            </div>
            <div class="form-group">
              <label for="body">Body</label>
              <input type="text" value="{{$post->body}}" class="form-control" id="body" aria-describedby="body"  name="body">
            </div>
      @endif

            <button type="submit" class="btn btn-primary">Update post</button>
            @include('errors')
          </form>

</div>
@endsection
