@extends('layouts.main')

@section('container')
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1>Share a note</h1>
			<hr>

			{!! Form::open(array('route' => 'notes.store', 'files' => true)) !!}

					<!--  Title -->
    				{{ Form::label('title', 'Title:') }}
    				{{ Form::text('title', null, array('class' => 'form-control')) }}

    				<!--  Description -->
    				{{ Form::label('description', 'Description:') }}
    				{{ Form::textarea('description', null, array('class' => 'form-control')) }}

    				<!-- Class -->
    				{{ Form::label('class', 'Class:') }}
    				{{ Form::text('class', null, array('class' => 'form-control', 'placeholder' => '(i.e., ENES140)')) }}

    				<!-- Upload -->
    				{{ Form::label('note_image', 'Upload:') }}
    				{{ Form::file('note_image') }}

    				{{ Form::submit('Share!', array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 20px')) }}



			{!! Form::close() !!}

			
		</div>
	</div>
@endsection