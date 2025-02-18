@extends('layout')

@section('title')
  <h1>Projects - create</h1>
@endsection

@section('content')
<h2>Créer un nouveau projet</h2>
<form method="POST" action="/project">
    @csrf
    <div>
        <input type="text" name="title" placeholder="Titre du projet">
    </div>
    <div>
        <textarea name="description" placeholder="Description du projet"></textarea>
    </div>
    <div>
        <button type="submit">Créer le projet</button>
    </div>
</form>

@endsection

