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

                    @include('rest.create')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
