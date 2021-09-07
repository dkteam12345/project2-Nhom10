@EXTENDS('adminlayout')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @if($phong != NULL)
    <form method="POST">
        @csrf
        
        <input value="{{$phong->tenphong}}" type="text" name="tenphong" placeholder="Nhập ten phong">
        <input value="{{$phong->ID_tang}}" type="text" name="ID_tang" placeholder="Nhập ID_tang">
        <button type="submit">Cập nhật</button>
    @else 
        <h1>Ko có dữ liệu</h1>
    @endif
    </form>
</body>
</html>
@endsection