<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<h1>循环</h1>
@foreach($res as $key=>$v)
{{$v->id}} - {{$v->age}} - {{$v->name}} <br/>
@endforeach
<h1>判断操作</h1>
@if($day == 1)
	星期一
@elseif($day == 2)
	星期二
@elseif($day == 3)
	星期三
@elseif($day == 4)
	星期四
@elseif($day == 5)
	星期五
@endif
</body>
</html>