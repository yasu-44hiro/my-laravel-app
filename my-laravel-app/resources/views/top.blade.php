@extends('layouts.app')

@section('content')
<div class="container-fluid d-flex vh-100 hero">
    <div class="container d-inline-flex flex-column align-self-center">
      <h1 class="mt-n5 hero_title h1">My Supplement</h1>
      <p class="mt-5 hero_text h3">お気に入りのSupplementをシェアしよう</p>
      <p class="text-center mt-5"><a href="{{ route('login') }}" type="button" class="btn btn-secondary btn-lg " >始める</a></p>
      <p class="text-center mt-5"><a href="/login/guest" type="button" class="btn btn-secondary btn-lg " >ゲストで始める</a></p>
</button>
    </div>
  </div>
@endsection
