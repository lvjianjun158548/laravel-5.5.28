<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="{{route('t7')}}" method="post">
		<input type="text" name="money" placeholder="请输入金额" /> <br/>
		<input type="text" name="name" placeholder="请输入用户名" /> <br/>
		<!-- <input type="hidden" name="_token" value="{{csrf_token()}}"> -->
		{{csrf_field()}}
		<input type="submit" value="提交哦">

	</form>
</body>
</html>