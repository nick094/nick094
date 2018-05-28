@extends ('layout')

@section ('content')


	
<div class="col-sm-8 blog-main">
		<form method="POST" action="/login">

			<h1>Sign In</h1>
			<hr>

			<div class="form-group">
				<label for="email">Email</label>
				<input type="email" class="form-control" id="email" name="email">
			</div>

			<div class="form-group">
				<label for="password">Password</label>
				<input type="password" class="form-control" id="password" name="password">
			</div>

			<div class="form-group">
				<button type="submit" class="btn btn-primary">Sign In</button>
			</div>


		@include ('errors')

			<p>Not registered yet? Register 
<a href="/register">
			here!
</a>
		</p>

		</form>
	</div>



@endsection