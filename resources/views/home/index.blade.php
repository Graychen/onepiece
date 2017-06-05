@extends('layouts.home')

@section('content')
@foreach ($goods as $good)
  <div class="col-xs-6 col-md-3">
      <a href="#" class="thumbnail">
            <img src="{{Storage::url($good->pic)}}" alt="{{ $good->name }}">
                  <h3>{{ $good->name }}</h3>
      </a>
  </div>
    
@endforeach

@endsection
