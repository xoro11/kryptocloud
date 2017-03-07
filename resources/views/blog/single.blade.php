@extends('main')

@section('title','| single')


@section('content')
<link rel="stylesheet" type="text/css" href="{{URL::to('css/main.css')}}">
<div class="row" data-postid="{{$post->id}}">
	<div class="col-md-6 col-md-offset-2">
		<h1>{{ $post->title }}</h1>
		<p>{{$post->body}}</p>
        <hr>
        <p>Posted In:{{ $post->category->name }}</p>
	</div>

<div class="interaction">

    <a href="#" class="like btn btn-success">Like</a>
    <a href="#" class="like btn btn-danger">Dislike</a>
</div>
</div>
{!! Html::script('js/jquery.js') !!}
{!! Html::script('js/app.js ') !!}
<script>
    var token='{{Session::token()}}';
    var urlLike='{{route('like')}}';

</script>
@endsection 