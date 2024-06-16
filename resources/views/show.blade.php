
@extends('layouts/master')


@section('main')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $profile->name }}</div>

                <div class="card-body">
                    <p><strong>Email:</strong> {{ $profile->email }}</p>
                    <p><strong>Bio:</strong> {{ $profile->bio }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
