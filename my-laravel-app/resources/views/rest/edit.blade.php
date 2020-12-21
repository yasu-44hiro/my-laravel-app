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

                    @if (count($errors) > 0)
                    <div>
                      <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                        @endforeach
                      </ul>
                    </div>
                    @endif

                    <h2>編集</h2>
                    <form action="/rest/{{$item->id}}" method="post">
                    @method('PATCH')
                    <dl>
                      @csrf
                      <input type="hidden" name="id" value="{{$item->user_id}}">
                      <dt>品番</dt>
                      <dd><input type="text" name="product_number" value="{{$item->product_number}}"></dd>
                      <dt>難易度</dt>
                      <dd><input type="number" name="level" value="{{$item->level}}"></dd>
                      <dt>内容</dt>
                      <dd><input type="text" name="detail" value="{{$item->detail}}"></dd>
                      <dt>未完了：0　完了：1</dt>
                      <dd>
                        <select name="status" >
                          <option value="0">0</option>
                          <option value="1">1</option>
                        </select>
                      </dd>
                    </dl>
                    <input type="submit" value="send">
                    <input type="button" onclick="history.back()" value="戻る">

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
