@extends('main')

@section('title','| Home')

 @section('content')

$exists = Storage::get('file.txt');

$encrypted = Crypt::encryptString('$exists');

Storage::put('file.txt', $encrypted);

 @endsection
