<html>
<body>

<form method="post" action="{{url('upload')}}"
enctype="multipart/form-data">
<input type="hidden" name="_token" value="{{ csrf_token()  }}">
<label for="file">Filename:</label>
<input type="file" name="file" id="file" /> 
<br />
<input type="submit" name="submit" value="Submit" />
</form>

</body>
</html>
