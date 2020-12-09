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
                    {{ __('新着情報!') }}
                    <form action="/home/find" method="post">
                    @csrf
                    <input type="text" name="input" value="{{$input}}">
                    <input type="submit" value="find">
                    </form>
                    @if(isset($item))
                    <table>
                      <tr>
                          <th>Data</th>
                      </tr>
                      <tr>
                          <td><a href="">{{$item->getData()}}</a></td>
                      </tr>
                    </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
