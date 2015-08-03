<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="utf-8">
    <title>Home Page</title>
</head>
<body>
<h2>Welcome</h2>

@if(Session::has('message'))
    <p> {{ Session::get('message') }}</p>
@endif
{{ HTML::link('/users/register','Register') }}
{{ HTML::link('/users/log','Log In') }}





</body>
</html>