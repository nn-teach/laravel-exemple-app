@extends('layout')

{{-- On peut aussi déclarer la section en inline --}}
{{-- @section('title','Title - Home') --}}

@section('title')
  <h1>{{ $title }}</h1>
@endsection

@section('content')
  <p>Contenu de la page d'accueil</p>
@endsection
