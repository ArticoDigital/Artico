<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<h1>Nuevo mensaje desde el formulario de artico.io</h1>
<ul>

    @foreach($form->toArray() as $key => $item)
        <li>{{$key}}: {{$item}}</li>
    @endforeach

</ul>
</body>
</html>