@extends('layout')

@section('content')

<!-- listing title/body of a post -->

<div class="col-sm-8 blog-main">
	<h1>{{$post->title}}</h1>
		<p>{{$post->body}}</p>

@if (count($post->tags));
	<ul>
		@foreach($posts->tags as $tag)
			<li>
				<a href="/posts/tags/{{$tag->name}}">
					{{$tag->name }}
				</a>
			</li>
		@endforeach
	</ul>
@endif


<hr>

<!-- listing comments of an post -->

	<div class="comments">
	  	<ul class="list-group">
			@foreach($post->comments as $comment)
				<li class="list-group-item">
					<strong>
						{{ $comment->created_at->diffForHumans() }}
					</strong>	
						{{ $comment->body }}
							@if (Auth::check() )
								<div class="container">
									<div class="row">
										<div class="form-group">
												<form action="/comment/{{ $comment->id }}/edit" method="POST">
                        							{{ csrf_field() }}
														<button type="submit" class="btn btn-primary">Edit comment</button>
												</form>
												<form action="/comment/{{ $comment->id }}/delete" method="POST">
													{{ csrf_field() }}
													{{ method_field('DELETE') }}
														<button type="submit" class="btn btn-primary">Delete comment post</button>
												</form>
										</div>
									</div>
								</div>
							@endif
				</li>
			@endforeach
		</ul>
	</div>

<!--   form for adding comments   -->
		<hr>

		<div class="card">
			<div class="card-block">
				<form method="POST" action="/posts/{{$post->id}}/comments"> 
						{{ csrf_field() }}
					<div class="form-group">
						<textarea name="body" placeholder="Enter your comment here" class="form-control" required></textarea>
					</div>	
				
			</div>	
		</div>

							 @if (Auth::check() )
									<div class="container">
										<div class="row">
											<div class="form-group">
												 <button  type="submit" class="btn btn-primary">Add comment</button>
											</div>
										</div>
									</div>
							@endif
		@include('errors')
		</form>
</div>

@endsection