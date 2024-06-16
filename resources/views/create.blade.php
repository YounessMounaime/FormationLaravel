@extends('layouts.master')

@section('main')
<div class="container">
  <h1>Ajouter un Profil</h1>
  <form action="{{route('store')}}" method="POST">
    @csrf
    <div class="mb-3">
      <label for="name" class="form-label">Nom</label>
      <input type="text" class="form-control" id="name" name="name" required>
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input type="email" class="form-control" id="email" name="email" required>
    </div>
    <div class="mb-3">
      <label for="password" class="form-label">Email</label>
      <input type="password" class="form-control" id="password" name="password" required>
    </div>
    <div class="mb-3">
      <label for="bio" class="form-label">Bio</label>
      <textarea class="form-control" id="bio" name="bio" rows="3" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Ajouter</button>
  </form>
</div>
@endsection
