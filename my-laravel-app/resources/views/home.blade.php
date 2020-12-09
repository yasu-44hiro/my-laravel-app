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
                    {{ __('CEを選択') }}
                    <form action="/home" method="post">
                    @csrf
                    <select name="name" id="">
                        @foreach ($items as $item)
                    <option value="{{$item->name}}">{{$item->name}}</option>
                        @endforeach
                    </select>
                    <input type="submit" value="find">
                    </form>
                    @if(isset($items))
                    <table>
                      <tr>
                          <th>Data</th>
                      </tr>
                      <tr>
                          <td><a href="">{{$items}}</a></td>
                      </tr>
                    </table>
                    @endif
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection