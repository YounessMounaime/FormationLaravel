@extends('layouts.master')

@section('main')
<div class="container">
  <h1>Liste des Profils</h1>
  <a href="" class="btn btn-primary mb-3">Ajouter un profil</a>
  <div class="row">
      @foreach($tous_profiles as $profile)
      <div class="col-md-4 mb-4">
          <div class="card">
              <div class="card-body">
                  <h5 class="card-title">{{ $profile->name }}</h5>
                  <h6 class="card-subtitle mb-2 text-muted">{{ $profile->email }}</h6>
                  <p class="card-text">{{ $profile->bio }}</p>
                  <a href="{{ route('profile.show', $profile->id) }}" class="btn btn-info btn-sm">Afficher</a>
                  <form action="" method="POST" style="display: inline;">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-danger btn-sm">Supprimer</button>
                  </form>
              </div>
          </div>
      </div>
      @endforeach
  </div>
  {{$tous_profiles->links()}}
</div>
@endsection
