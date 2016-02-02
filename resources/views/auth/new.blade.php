<html>


<body>

{!! Form::open(array('url' => '', 'method' => '')) !!}
    <!-- Name Form Input -->
    <div class="form-group">
        {{ Form::label('name', 'Name:') }}
        {{ Form::text('name', null, ['class' => 'form-control']) }}
    </div>
    <!-- Password Form Input -->
    <div class="form-group">
        {{ Form::label('password', 'Password:') }}
        {{ Form::password('password', ['class' => 'form-control']) }}
    </div>
{!! Form::hidden('name', $text) !!}
{!! Form::close() !!}

<!--- Submit Field --->
<div class="form-group">
    {!! Form::submit('submit', ['class' => 'btn btn-primary']) !!}
</div>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css"/>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    {!! @if !!}

</body>
</html>