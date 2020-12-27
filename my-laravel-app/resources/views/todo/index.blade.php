@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h1 class="card-header">{{$item->name}}のクエストリスト</h1>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if($item->todos != null )
                    <div class="container">
                        <div class="row">
                            <div class="col"><h2>未完了クエスト</h2>
                            <table border="1" class="table table-hover">
                            <thead>
                            <tr>
                            <th>機種</th>
                            <th>編集</th>
                            <th>削除</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach ($item->todos as $todo)
                            @if ($todo->status == 0)
                            <tr>
                            <td><a href="/rest/{{$todo->id}}">{{$todo->product_number}}</a></td>
                            @if (Auth::user()->role == 'owner')
                            <td><a href="/rest/{{$todo->id}}/edit">編集</a></td>
                            <td><a href="/todo/delete?id={{$todo->id}}">削除</a></td>
                            @endif
                            </tr>
                            @endif
                            @endforeach
                            </tbody>
                            </table></div>
                            <div class="col">
                                <h2>完了クエスト</h2>
                                <table border="1" class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>機種</th>
                                            <th>編集</th>
                                            <th>削除</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($item->todos as $todo)
                                        @if ($todo->status == 1)
                                            <tr>
                                                <td><a href="/rest/{{$todo->id}}">{{$todo->product_number}}</a></td>
                                            @if (Auth::user()->role == 'owner')
                                                <td><a href="/rest/{{$todo->id}}/edit">編集</a></td>
                                                <td><a href="/todo/delete?id={{$todo->id}}">削除</a></td>
                                                @endif
                                            </tr>
                                        @endif
                                        @endforeach
                                    </tbody>
                                </table>
                                @endif
                            </div>
                        </div>
                    </div>
                    <p><input type="button" onclick="history.back()" value="戻る"></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
