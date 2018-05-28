@extends('layout')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-sm-8 blog-main">

@if($posts)
  @foreach ($posts as $post)
    @include('post')
      <tr>
        <td>
          <div class="form-group">
            <div class="container">
               @if (Auth::check() )
              <div class="row">
                <form action="/post/{{ $post->id }}/delete" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                          <button type="danger" class="btn btn-primary"  >Delete Post</button>        
                </form>    
                      &nbsp; &nbsp;  
                <form action="/post/{{ $post->id }}/edit" method="POST">
                        {{ csrf_field() }}
                          <button type="submit" class="btn btn-primary">Edit post</button> 
                </form>
              </div>
              @endif
            </div>
          </div>
        </td>
      </tr>
  @endforeach  
@endif
    
    <nav class="blog-pagination">
        <a class="btn btn-outline-primary" href="#">Older</a>
        <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
    </nav>

</div>

@endsection

@section('footer')

@endsection