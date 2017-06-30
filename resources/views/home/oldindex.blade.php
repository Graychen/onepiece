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


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
@endsection

