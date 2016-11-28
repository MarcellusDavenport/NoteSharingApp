@extends('layouts.main')

@section('active_nav') 
			<li><a href="/">Home <span class="sr-only">(current)</span></a></li>
@endsection

@section('container')

    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            {!! Form::open() !!}

            	{{ Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'user@umd.edu'])}}
            	<br>
            	{{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'password'])}}
            	<br>
            	{{ Form::checkbox('remember')}} {{ Form::label('remember', 'Remember Me')}}
            	<br>
            	{{ Form::submit('Login', ['class' => 'btn btn-primary btn-block'])}}

                <div style="text-align: center;margin-top:10px">
                    <a href="/register" class="text-center"> Don't have an account?</a>
                </div>
                

            {!! Form::close() !!}
        </div>
    </div>

@endsection
