@EXTENDS('layout.main')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        @csrf
        <input type="text" name="name" placeholder="Nhập tên">
        <input type="text" name="address" placeholder="Nhập Sđt">
        <button type="submit">Đăng ký</button>
    </form>
</body>
</html>


@endsection