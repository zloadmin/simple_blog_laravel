@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		
		<h1>{{ $post->title }}</h1>

	    <hr>

	    <p><span class="glyphicon glyphicon-time"></span> Posted on {{ $post->created_at->format('F j, Y, g:i a') }}</p>

	    <hr>

	    <img class="img-responsive" src="{{ $post->image }}" alt="" width="100%">

	    <hr>

		<div class="content">
			{{ $post->full_story }}
		</div>

        <hr>

        <!-- Blog Comments -->
        <div class="well comment-form">		
	    	@if (Auth::guest())
	    		<div class="regfocomm"><h2><a href="{{ url('/register') }}">Register</a> or <a href="{{ url('/login') }}">sign in</a> for add comments</h2></div>
	    	@endif
	        <!-- Comments Form -->

	            <h4>Leave a Comment:</h4>
	            <form role="form" id="addcomment" method="POST" action="/comment/create">
	            	{!! csrf_field() !!}
	                <div class="form-group">
	                    <textarea class="form-control" rows="3" name="comment"></textarea>
	                </div>
	                <button type="submit" class="btn btn-primary pull-right">Submit</button>
					<input type="hidden" name="post_id" value="{{ $post->id }}">
	            </form>

	        
        </div>

		@if (count($errors) > 0)
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
		@endif

        <hr>

        <h2>Coments</h2>

		<hr>
		@if($comments)
			<!-- Comments -->
			<div id="comments">
				@foreach($comments as $comment)
					<div class="media">
						<a class="pull-left" href="#">
							<img class="media-object" src="http://placehold.it/64x64" alt="">
						</a>
						<div class="media-body">
							<h4 class="media-heading">{{ $comment->user->name }}
								<small>{{ $comment->created_at->format('F j, Y, g:i a') }}</small>
							</h4>
							{{ $comment->comment }}
						</div>
					</div>
					<hr>
				@endforeach
			</div>

			<hr>

			<div class="row pages">
				<div class="text-center">
					{!! $comments->links() !!}
				</div>
			</div>

		@else
			<!-- No Comments -->
		@endif
	</div>
</div>
@endsection