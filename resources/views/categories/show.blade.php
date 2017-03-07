@extends('main')

@section('title','| All Categories')

@section('content')
<hr>
<h1>Category:{{ $p->name }}</h1>
{{$p->id}}

@endsection