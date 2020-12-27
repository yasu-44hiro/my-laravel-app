@extends('layouts.simple')

@section('content')
<div class="container-sm">
    <div class="row justify-content-center">
        <div class="col-md-8">

                    @if (count($errors) > 0)
                    <div>
                      <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                        @endforeach
                      </ul>
                    </div>
                    @endif

                    <form action="/rest/{{$item->id}}" method="post">
                    @method('PATCH')
                    @csrf
                        <dl>
                          <dt></dt>
                          <dd><input type="hidden" name="id" value="{{Auth::user()->id}}"></dd>
                          <dt class="mb-3"><label for="category_name" class="form-label">カテゴリー</label></dt>
                          <dd>
                                  <div class="input-group">
                                        <select name="category_id" id="category_id" class="form-select" aria-label="Default select example">
                                            <option selected>カテゴリーを選択</option>
                                            @foreach ($categories as $category)
                                            <option value="{{$category->id}}">{{$category->category_name}}</option>
                                            @endforeach
                                        </select>
                                  </div>
                          <dt class="mb-3"><label for="title" class="form-label">タイトル</label></dt>
                          <dd><input type="text" id="title" name="title" class="form-control" value="{{$item->title}}"></dd>
                          <dt><label for="content">内容</label></dt>
                          <dd class="form-floating"><textarea class="form-control" id="content" name="content" style="height: 100px">{{$item->content}}</textarea></dd>
                        </dl>
                        <button class="btn btn-primary" type="submit">更新</button>
                        <a href="/rest/{{$item->user_id}}"><button class="btn btn-primary" type="button" >キャンセル</button></a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
