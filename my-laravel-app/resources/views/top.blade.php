@extends('layouts.app')

@section('content')
<div class="container-fluid d-flex vh-100 hero">
    <div class="container row justify-content-center align-self-center">
      <h1 class="text-center mt-n5">My Supplement</h1>
      <p class="text-center mt-5">お気に入りのSupplementを見つけよう</p>
      <p class="text-center mt-5"><a href="{{ route('login') }}" type="button" class="btn btn-outline-primary btn-lg " >始める</a></p>
    </div>
  </div>
@endsection
