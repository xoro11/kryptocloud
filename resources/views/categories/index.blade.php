@extends('main')

@section('title','| All Categories')

@section('content')

<div class="row">
	<div class="col-md-8">
		<h1>Categories</h1>
		<table class="table">
			<thead>
				<tr>
					<th>#</th>
					<th>Name</th>
				</tr>
			</thead>
			<tbody>

			@foreach($categories as $c)

				<tr> 
				<th>{{$c->id}}</th>
				<td>{{$c->name}}</td>
				<td><a href="{{route('categories.show',$c->id)}}"class="btn btn-default btn-sm">View All</a>
				<a href="{{route('categories.edit',$c->id)}}" class="btn btn-default btn-sm">Edit</a></td></tr>
				@endforeach
			</tbody>
		</table>
	</div>
	<div class="col-md-3">
		<div class="well">
			{!!Form::open(['route'=>'categories.store','method'=>'POST'])!!}
			<h2>New Category</h2>
			{{Form::label('name','Name:')}}
			{{Form::text('name',null,['class'=>'form-control'])}}

			{{Form::submit('Create New Category',['class'=>'btn btn-primary btn-block'])}}
		</div>
	</div>

</div>

@endsection