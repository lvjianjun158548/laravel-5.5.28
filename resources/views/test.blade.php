<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<!-- <h1>dsafsdagdfs</h1>
	<h2>{{$date}}</h2>
	<h2>{{date('Y-m-d H:i:s',$uts)}}</h2> -->
	@foreach($res as $k=>$v)
		{{$v->id}} - {{$v->age}} - {{$v->name}} <br/>
	@endforeach
</body>
</html>
