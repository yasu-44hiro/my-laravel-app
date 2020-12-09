@extends('layouts.app')

@section('content')
    @if(count($error) > 0)
    <div>
      <ul>
        @foreach ($errors->all() as $error)
      <li>{{$error}}</li>
        @endforeach
      </ul>
    </div>
    @endif
    <form action="/toto/add" method="post">
    <table>
      @csrf
    <tr><th>product_number:</th><td><input type="text" name="product_number:" value="{{old('product_number:')}}"></td></tr>
    <tr><th>level:</th><td><input type="number" name="level:" value="{{old('level:')}}"></td></tr>
    <tr><th>detail</th><td><input type="text" name="detail" value="{{old('detail')}}"></td></tr>
    <tr><th></th><td><input type="submit" name="detail" value="send"></td></tr>
    </table>
    </form>
@endsection
