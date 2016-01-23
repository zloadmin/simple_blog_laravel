@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		
		<h1>{{ $post->title }}</h1>

	    <!-- Author -->
	    <p class="lead">
	        by <a href="#">Start Bootstrap</a>
	    </p>

	    <hr>

	    <p><span class="glyphicon glyphicon-time"></span> Posted on August 24, 2013 at 9:00 PM</p>

	    <hr>

	    <img class="img-responsive" src="{{ $post->image }}" alt="" width="100%">

	    <hr>

		<div class="content">
			{{ $post->full_story }}
		</div>

        <hr>

        <!-- Blog Comments -->

        <!-- Comments Form -->
        <div class="well">
            <h4>Leave a Comment:</h4>
            <form role="form">
                <div class="form-group">
                    <textarea class="form-control" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

        <hr>

        <h2>Coments</h2>

		<hr>
        
        <!-- Comment -->
        <div class="media">
            <a class="pull-left" href="#">
                <img class="media-object" src="http://placehold.it/64x64" alt="">
            </a>
            <div class="media-body">
                <h4 class="media-heading">Start Bootstrap
                    <small>August 25, 2014 at 9:30 PM</small>
                </h4>
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
            </div>
        </div>

	</div>
</div>
@endsection