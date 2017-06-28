@extends('layouts.home')

@section('content')
<form method="post" action="{{url('upload')}}"
enctype="multipart/form-data">
<input type="hidden" name="_token" value="{{ csrf_token()  }}">
<label for="file">商品图片:</label>
<input type="file" name="file" id="file" /> 
<label for="file">商品名称:</label>
<input type="input" name="name" id="name" /> 
<label for="file">租售价格:</label>
<input type="input" name="price" id="name" /> 
<label for="file">时间:</label>
<input type="input" name="time" id="name" /> 
<label for="file">单位:</label>
<input type="input" name="unit" id="unit" /> 
<br />
<input type="submit" name="submit" value="Submit" />
</form>


@endsection
