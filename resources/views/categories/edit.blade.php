@extends('main')
@section('title','| View Post')
@section('content')
<div class="row">
	{!! Form::model($post,['route'=>['categories.update',$post->id],'method'=>'PUT'])!!}
	<div >
		{{Form::label('name','Category:')}}
    {{Form::text('name',null,["class"=>'form-control input-lg'])}}
	
	</div>
	<div >
						{{Form::submit('Save Changes',['class'=>'btn btn-success btn-block'])}}
					
					
					</div>

</div>

@endsection