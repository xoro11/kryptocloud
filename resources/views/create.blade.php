@extends('layouts.app')
@section('content')

<div class="row">
	<div class="col-md-8 col-md-offset-2">
	<h1>Create a new Post</h1>
		<hr>
		{!! Form::open(['route' => 'posts.store','data-parsley-validate'=>'']) !!}
        {{Form::label('title', 'Title:')}}
        {{Form::text('title', null, array('class'=> 'form-control','required'=>''))}}
 		{{Form::label('slug','Slug:')}}
 		{{Form::text('slug',null,array('class'=>'form-control','required'=>'','maxlength'=>'255'))}}       {{Form::label('body',"Post Body:")}}
        {{Form::textarea('body',null,array('class'=>'form-control','required'=>''))}}
        {{Form::submit('Create Post',array('class'=>'btn btn-success btn-large btn-block','style'=>'margin-top:20px'))}}
		{!! Form::close() !!}
	</div>
</div>
@endsection
@section('scripts')

{!! Html::script('js/parsey.min.js')!!}
@endsection