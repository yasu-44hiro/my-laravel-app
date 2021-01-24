@extends('layouts.simple')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          @foreach ($item->users as $user)

            <div class="card">
                <div class="card-body">
                    <p class="card-subtitle mb-2 btn btn-warning btn-sm">{{$user->post->category_name}}</p>
                    <p class="card-title">{{$user->title}}</p>
                    <p class="card-text">{{$user->content}}</p>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a href="/rest/{{$user->id}}/edit" class="btn btn-primary">編集</a>
                        <form action="/rest/{{$user->id}}" method="POST">
                            @method('DELETE')
                            @csrf
                            <input type="hidden" name="id" value="{{$user->id}}">
                            <input class="btn btn-primary" type="submit" value="削除">
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="d-flex mt-4">
                <button class="btn btn-primary me-md-2" type="button" onclick="history.back()">前の画面へ</button>
                <a href="{{ url('/todo/index') }}"><button class="btn btn-primary" type="button" >一覧へ</button></a>
            </div>
        </div>
    </div>
</div>
@endsection
