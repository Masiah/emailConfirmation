<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration Form</title>
    <style>

    </style>
</head>
<body>
<div class="register">
    <h1>Register</h1>
</div>



<h3>YOUR PERSONAL DETAILS</h3>
@if($errors->has())
    <p> Error Occurred </p>
    <ul>
        @foreach($errors->all() as $error)
            <li class="error">{{ $error }}</li>
        @endforeach
    </ul>
@endif

{{ Form::open(array('url'=>'users/create')) }}
<div>
    {{ Form::label('firstName','First Name') }}
    {{ Form::text('firstName',null,array('placeholder'=>'Your First Name')) }}
</div>

<div>
    {{ Form::label('lastName','Last Name') }}
    {{ Form::text('lastName',null,array('placeholder'=>'Your Last Name')) }}
</div>

<div>
    {{ Form::label('Gender') }}

    {{ Form::radio('gender', 'male') }}
    {{ Form::label('male','Male') }}

    {{ Form::radio('gender', 'female') }}
    {{ Form::label('female','Female') }}
</div>

{{--
<div>
    {{ Form::label('mobileNumber','First Name') }}
    {{ Form::text('mobileNumber',null,array('placeholder'=>'Mobile Number ')) }}
</div>
--}}

<div>
    {{ Form::label('email','Email Address') }}
    {{ Form::email('email',null,array('placeholder'=>'Your Email Name')) }}
</div>

{{--<div>
    {{ Form::label('DoB','Date of Birth') }}
    {{ Form::text('DoB',null,array('placeholder'=>'Date Of Birth'))}}
</div>

<div>
    {{ Form::label('Education Level') }}
</div>

<div>

    {{ Form::checkbox('Education', 'primaryLevel') }}
    {{ Form::label('Primary Level') }}
</div>

<div>
    {{ Form::checkbox('name', 'secondaryLevel') }}
    {{ Form::label('Secondary Level') }}
</div>

<div>
    {{ Form::checkbox('name', 'tertiaryLevel') }}
    {{ Form::label('Tertiary Level') }}
</div>--}}



<div>
{{ Form::label('password','Password') }}
{{ Form::password('password',array('placeholder'=>'Your Password')) }}
</div>

<div>
{{ Form::label('password_confirmation','Password Confirmation') }}
{{ Form::password('password_confirmation',array('placeholder'=>'Password Confirmation')) }}
</div>

<div>
    {{ Form::submit('CREATE MY ACCOUNT') }}
    <div>
        {{ Form::close() }}

        {{ Form::close() }}

        {{--h3 class="sub-title">ALREADY A MEMBER SIGN IN</h3>
         {{ Form::open(array('url'=>'users/login'))}}
         <div class="input-group">
             <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span><span class="input-text">Email Address&#42;</span></span>
             {{ Form::email('email',null ,array('placeholder'=>'Your Email Address', 'class'=>'form-control input-lg')) }}
         </div><!-- End .input-group -->
         <div class="input-group">
             <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span><span class="input-text">Password&#42;</span></span>
             {{ Form::password('password',array('placeholder'=>'Password', 'class'=>'form-control input-lg')) }}
         </div><!-- End .input-group -->

         {{ Form::submit(' SIGN IN',array('class'=>'btn btn-custom btn-lg md-margin')) }}
         {{ Form::close() }}
 --}}



</body>
</html>
