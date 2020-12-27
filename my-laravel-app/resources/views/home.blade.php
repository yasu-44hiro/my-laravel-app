@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="/todo/index" method="post">
                    @csrf
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">{{ __('CEを選択') }}</label>
                        <div class="col-sm-10">
                        	<select name="id" class="form-select">
                        	  @foreach ($items as $item)
                        	  <option value="{{$item->id}}">{{$item->name}}</option>
                        	  @endforeach
                        	</select>
                        </div>
                    </div>
                        <div class="text-right">
                            <input type="submit" value="find" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
