@extends('layouts.app')

@section('content')

<div class="container-sm">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="/todo/index" method="post">
                <div class="input-group">
                    @csrf
                    <select name="id" class="form-select mb-4 mt-4" aria-label="Default select example">
                        <option selected>カテゴリーで検索</option>
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
            <div class="accordion mb-4" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header bg-white" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        {{$params->category_name}}とは
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body bg-white">
                            {{$params->content}}
                        </div>
                    </div>
                </div>
            </div>
            @foreach ($params->categories as $category)
            <div class="card ">
                <a class="card-body text-dark" href="/todo/detail?id={{$category->id}}">
                    <dl>
                        <dt class="btn btn-warning btn-sm mb-2" >{{$params->category_name}}</dt>
                        <dd class="h5">{{$category->title}}</dd>
                    </dl>
                    <div class="text-right mb-2">いいね！
                        <span class="badge badge-pill badge-primary">{{$category->favorite_users->count() }}</span>
                    </div>
                    <div class="d-flex justify-content-between align-items-end">
                        <p class="mb-0 h6 text-black-50">{{$category->user->name}}</p>
                        <p class="text-right"><time datetime="{{$category->created_at}}">{{date('Y年m月d日' , strtotime($category->created_at))}}</time></p>
                    </div>
                </a>
                <div class="text-right mb-3 mr-3">
                    @if (Auth::id() != $category->user->id)
                    @if (Auth::user()->is_favorite($category->id))
                        {!! Form::open(['route' => ['favorites.unfavorite', $category->id], 'method' => 'delete']) !!}
                            {!! Form::submit('いいね！', ['class' => "button btn btn-primary"]) !!}
                        {!! Form::close() !!}
                    @else
                        {!! Form::open(['route' => ['favorites.favorite', $category->id]]) !!}
                            {!! Form::submit('いいね！', ['class' => "button btn btn-secondary"]) !!}
                        {!! Form::close() !!}
                    @endif
                    @endif
                </div>
            </div>
            @endforeach
            <div class="d-frex mt-4">
                <button class="btn btn-primary me-md-2" type="button" onclick="history.back()">前の画面へ</button>
                <a href="{{ url('/todo/index') }}"><button class="btn btn-primary" type="button" >一覧へ</button></a>
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
                    <div class="text-right mb-2">いいね！
                        <span class="badge badge-pill badge-primary">{{$category->favorite_users->count() }}</span>
                    </div>
                    <div class="d-flex justify-content-between align-items-end">
                        <p class="mb-0 h6 text-black-50 ">{{$category->user->name}}</p>
                        <p class="text-right"><time datetime="{{$category->created_at}}">{{date('Y年m月d日' , strtotime($category->created_at))}}</time></p>
                    </div>
                </a>
                <div class="text-right mb-3 mr-3">
                    @if (Auth::id() != $category->user->id)
                        @if (Auth::user()->is_favorite($category->id))
                            {!! Form::open(['route' => ['favorites.unfavorite', $category->id], 'method' => 'delete']) !!}
                                {!! Form::submit('いいね！', ['class' => "button btn btn-primary"]) !!}
                            {!! Form::close() !!}
                        @else
                            {!! Form::open(['route' => ['favorites.favorite', $category->id]]) !!}
                                {!! Form::submit('いいね！', ['class' => "button btn btn-secondary"]) !!}
                            {!! Form::close() !!}
                        @endif
                    @endif
                </div>
            </div>
            @endforeach
            @endforeach
            @endif
        </div>
    </div>
</div>

@endsection
