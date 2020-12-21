@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h1 class="card-header">{{$item->name}}</h1>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if($item->todos != null)
                    <ul>
                      @foreach ($item->todos as $todo)
                      <li><a href="/rest/{{$todo->id}}">{{$todo->product_number}}</a></li>
                      @if (Auth::user()->role == 'owner')
                      <a href="/rest/{{$todo->id}}/edit">編集</a>
                      <a href="/todo/delete?id={{$todo->id}}">削除</a>
                      @endif
                      @endforeach
                    </ul>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
