@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h1 class="card-header">{{$item->user->name}}</h1>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h2>{{$item->product_number}}</h2>
                    <ul>
                      <li>難易度:{{$item->level}}</li>
                      <li>詳細:{{$item->detail}}</li>
                      <li>状態:{{$item->status}}(末完了:0  完了:1)</li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
