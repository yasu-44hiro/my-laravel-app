@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h1 class="card-header">{{$item->todo->name}}</h1>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="/rest/{{$item->id}}" method="post">
                    @method('DELETE')
                    @csrf
                    <h2>{{$item->product_number}}</h2>
                    <ul>
                      <li>難易度:{{$item->level}}</li>
                      <li>詳細:{{$item->detail}}</li>
                      <li>状態:{{$item->status}}(末完了:0  完了:1)</li>
                    </ul>
                    <input type="submit" value="send">
                    <input type="button" onclick="history.back()" value="戻る">

                </div>
            </div>
        </div>
    </div>
</div>

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <form action="/rest/{{$item->id}}" method="post">
                    @method('DELETE')
                    @csrf
                    <h6 class="card-subtitle mb-2 btn btn-warning btn-sm">{{$item->post->category_name}}</h6>
                    <h5 class="card-title">{{$item->title}}</h5>
                    <p class="card-text">{{$item->content}}</p>
                </div>
            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button class="btn btn-primary me-md-2" type="button" onclick="history.back()">前の画面へ</button>
            </div>
        </div>
    </div>
</div>
@endsection

@endsection
