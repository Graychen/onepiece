@extends('layouts.home')

@section('content')
@foreach ($goods as $good)
  <div class="col-xs-6 col-md-3" data-toggle="modal" data-target="#myModal">
      <a href="#" class="text-center bg-white">
            <img src="{{Storage::url($good->pic)}}" alt="{{ $good->name }}">
                  <h3>{{ $good->name }}</h3>
      </a>
  </div>
    
@endforeach


@endsection

