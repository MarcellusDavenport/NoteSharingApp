@extends('layouts.main')


@section('active_nav') 
			<li class="active"><a href="/">Home <span class="sr-only">(current)</span></a></li>
@endsection


@section('container')



		<!-- -->
		<div class="row">
			<div class="col-md-10">
				<h1>All Notes</h1>
			</div>
			<div class="col-md-2">
				<a href="{{ route('notes.create') }}" class="btn btn-lg btn-block btn-primary btn-h1-spacing">Share New Note</a>
			</div>
			
			<!-- trick to fit horizontal rule in -->
			<div class="col-md-12">
				<hr>
			</div>

		</div> <!-- end of row -->

		<!-- List of all notes -->
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				@foreach($all_notes as $note)

					<div class="well">

						<div class="text-center">
						<h1> {{ $note->title }} </h1>
						<img src="{{ asset('note_images/' . $note->images)}}" class="img-responsive center-block">
						<h3> {{ $note->class }} </h3>
						<p> {{ $note->description }} </p>
						<a href="#" class="btn btn-default">Edit</a>
						</div>
					</div>
				@endforeach
			</div>
		</div>

			
@endsection

@section('extra_javascript')
	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	<script src="js/magnificent.js"></script>

@endsection