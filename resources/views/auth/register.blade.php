@extends('layouts.main')

@section('active_nav') 
			<li><a href="/">Home <span class="sr-only">(current)</span></a></li>
@endsection

@section('container')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            {!! Form::open() !!}

            	{{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'username'])}}
            	<br>
            	{{ Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'user@umd.edu'])}}
            	<br>
            	{{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'password'])}}
                <br>
                {{ Form::password('password_confirmation', ['class' => 'form-control', 'placeholder' => 'confirm password'])}}
            	<br>
            	{{ Form::submit('Register', ['class' => 'btn btn-primary btn-block'])}}

            {!! Form::close() !!}
        </div>
    </div>

@endsection
