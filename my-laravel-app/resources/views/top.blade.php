@extends('layouts.layout')

@section('content')
<div class="loginPage">
  <div class="container">
    <section class="loginPage_contents">
    <h1 class="h3 loginPage_contents_title">新しいマッチを見つけよう</h1>
    <p class="btn loginPage_contents_btn"><a class="text-white" href="{{ route('login') }}">メールアドレスでログインする</a></p>
    </section>
  </div>
</div>
@endsection
