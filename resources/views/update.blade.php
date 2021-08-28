@EXTENDS('layout.main')
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
    @if($contact != NULL)
    <form method="POST">
        @csrf
        
        <input value="{{$contact->name}}" type="text" name="name" placeholder="Nhập họ tên của bạn">
        <input value="{{$contact->address}}" type="text" name="address" placeholder="Nhập số của bạn">
        <input type="text" name="phone" placeholder="Nhập sđt">
        <input type="text" name="active" placeholder="Nhập active">
        <button type="submit">Cập nhật</button>
    @else 
        <h1>Ko có dữ liệu</h1>
    @endif
    </form>
</body>
</html>
@endsection