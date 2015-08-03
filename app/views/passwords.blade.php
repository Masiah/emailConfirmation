<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="utf-8">
</head>
<body>
<h2>Your Password</h2>
<p>Please Provide A password for your account</p>
{{ Form::open(array('url'=>'users/password')) }}

<div>
    {{ Form::label('password','Password') }}
    {{ Form::password('password',null) }}
</div>
<div>
    {{ Form::label('password_confirmation','Confirm Password') }}
    {{ Form::password('password_confirmation') }}

</div>
<div>
    {{ Form::submit('Submit') }}
</div>
{{ Form::close() }}

</body>
</html>