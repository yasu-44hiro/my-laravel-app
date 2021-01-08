@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mt-5">
                <div class="card-body">
                    <p class="card-subtitle mb-2 btn btn-warning btn-sm mb-3">{{$item->post->category_name}}</p>
                    <p class="card-title h4">{{$item->title}}</p>
                    <p class="card-text">{{$item->content}}</p>
                </div>
            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button class="btn btn-primary me-md-2 mt-4" type="button" onclick="history.back()">前の画面へ</button>
            </div>
        </div>
    </div>
</div>
@endsection
