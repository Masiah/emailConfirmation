<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="utf-8">
</head>
<body>
<h2>Log In</h2>
@if($errors->has())
    <p> Error Occurred </p>
    <ul>
        @foreach($errors->all() as $error)
            <li class="error">{{ $error }}</li>
        @endforeach
    </ul>
@endif


<div>
    {{ Form::open(array('url'=>'users/login')) }}
    {{ Form::label('email','Email Address') }}
    {{ Form::email('email',null) }}
</div>
<div>
    {{ Form::label('password','Password') }}
    {{ Form::password('password') }}

</div>
<div>
    {{ Form::submit('Log In') }}
    {{ Form::close() }}
</div>

</body>
</html>