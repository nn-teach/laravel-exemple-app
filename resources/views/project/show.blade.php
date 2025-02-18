@extends('layout')

@section('title')
  <h1>Projects - {{$project->title}}</h1>
@endsection

@section('content')
{{$project->description}}
@endsection

