@extends('templete.templete')
@section('container')
@foreach ($data as $data)
  <a href="/opini/{{ $data->slug }}">  <h1>{{$data->title }}</h1></a>
    <p>{{ $data->author }}</p>
    <p>{{ $data->excerpt }}</p>
@endforeach

@endsection
