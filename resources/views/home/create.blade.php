@extends('layouts.home')

@section('content')
<form method="post" action="{{url('upload')}}"
enctype="multipart/form-data">
<input type="hidden" name="_token" value="{{ csrf_token()  }}">
<label for="file">商品图片:</label>
<input type="file" name="file" id="file" /> 
<label for="file">商品名称:</label>
<input type="input" name="name" id="name" /> 
<br />
<input type="submit" name="submit" value="Submit" />
</form>


@endsection
