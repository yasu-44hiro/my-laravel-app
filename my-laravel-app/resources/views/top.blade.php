@extends('layouts.app')

@section('content')
<div class="container-fluid d-flex vh-100 hero">
    <div class="container row align-self-center mx-auto">
      <h1 class="text-center mt-n5 bg-light text-dar h1">My Supplement</h1>
      <p class="text-center mt-5 bg-light text-dar  h3">お気に入りのSupplementをシェアしよう</p>
      <p class="text-center mt-5"><a href="{{ route('login') }}" type="button" class="btn btn-secondary btn-lg " >始める</a></p>
      <p class="text-center mt-5"><a href="/login/guest" type="button" class="btn btn-secondary btn-lg " >ゲストで始める</a></p>
</button>
    </div>
  </div>
@endsection
