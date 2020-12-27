@extends('layouts.app')

@section('content')
<div class="container-sm">
  <h1 class="text-center">My Supplement</h1>
  <p class="text-center">お気に入りのSupplementを見つけよう</p>
  <p class="text-center"><a href="{{ route('login') }}" type="button" class="btn btn-outline-primary btn-lg " >始める</a></p>
</div>
@endsection
