@extends('layouts.home')

@section('content')
@foreach ($goods as $good)
<div class="row">
  <div class="col-xs-6 col-md-3">
      <a href="#" class="thumbnail">
            <img src="{{ $good->pic }}" alt="{{ $good->name }}">
      </a>
  </div>
</div>
    
@endforeach

@endsection
