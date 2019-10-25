<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="{{route('t9')}}" method="post" enctype="multipart/form-data">
		<input type="text" name="name" placeholder="请输入姓名"> <br/>
		<input type="text" name="age" placeholder="请输入年龄"> <br/>
		<input type="text" name="email" placeholder="请输入邮箱"> <br/>
		<input type="file" name="avator" />
		{{csrf_field()}}
		<input type="submit" value="提交">
	</form>
	<hr/>
	@if (count($errors)>0)
		@foreach ($errors->all() as $err)
			{{$err}} <br/>
		@endforeach
	@endif
</body>
</html>