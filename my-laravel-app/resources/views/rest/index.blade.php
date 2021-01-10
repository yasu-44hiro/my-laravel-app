@extends('layouts.app')

@section('content')

<div class="container-sm">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <form action="/rest/index" method="post">
              <div class="input-group">
                    @csrf
                    <select name="id" class="form-select mb-4 mt-4" aria-label="Default select example">
                        <option selected>カテゴリーを選択</option>
                        @foreach ($items as $item)
                        <option value="{{$item->id}}">{{$item->category_name}}</option>
                        @endforeach
                    </select>
                    <span class="input-group-btn mt-4">
                    <button class="btn btn-primary" type="submit">検索</button>
                    </span>
              </div>
            </form>
            @if (isset($params))
            @foreach ($params->categories as $category)
            <div class="card ">
                  <a class="card-body text-dark" href="/todo/detail?id={{$category->id}}">
                      <dl>
                          <dt class="btn btn-warning btn-sm mb-2" >{{$params->category_name}}</dt>
                          <dd class="h5">{{$category->title}}</dd>
                      </dl>
                      <div class="d-flex justify-content-between align-items-end">
                        <p class="mb-0 h6 text-black-50">{{$category->user->name}}</p>
                        <p class="text-right"><time datetime="{{$category->created_at}}">{{date('Y年m月d日' , strtotime($category->created_at))}}</time></p>
                    </div>
                    </a>
            </div>
            @endforeach
            <div class="d-frex mt-4">
                <button class="btn btn-primary me-md-2" type="button" onclick="history.back()">前の画面へ</button>
                <a href="{{ url('/rest') }}"><button class="btn btn-primary" type="button" >一覧へ</button></a>
            </div>
            @else


            @foreach ($items as $item)
            @foreach ($item->categories as $category)
            <div class="card ">
                <a class="card-body text-dark" href="/todo/detail?id={{$category->id}}">
                    <dl>
                        <dt class="btn btn-warning btn-sm mb-2">{{$item->category_name}}</dt>
                        <dd class="h5">{{$category->title}}</dd>
                    </dl>
                    <div class="d-flex justify-content-between align-items-end">
                        <p class="mb-0 h6 text-black-50">{{$category->user->name}}</p>
                        <p class="text-right"><time datetime="{{$category->created_at}}">{{date('Y年m月d日' , strtotime($category->created_at))}}</time></p>
                    </div>
                </a>
            </div>
            @endforeach
            @endforeach
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            </div>
            @endif


        </div>
    </div>
</div>
@endsection
