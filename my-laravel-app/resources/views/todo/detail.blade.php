@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
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
