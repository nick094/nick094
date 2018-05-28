@extends('layout')



@section('content')
<div class="col-sm-8">
	<h1>Publish a post</h1>

<hr>

      @if(isset($comment))
            <form method="POST" action="/comment/{{$comment->id}}/update">
          		{{ csrf_field()  }}
              {{ method_field('POST') }}
            <div class="form-group">
              <label for="body">Body</label>
              <input type="text" value="{{$comment->body}}" class="form-control" id="body" aria-describedby="body"  name="body">
            </div>
      @endif


            <button type="submit" class="btn btn-primary">Update your comment</button>
            @include('errors')
          </form>

</div>
@endsection