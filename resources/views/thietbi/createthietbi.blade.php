@EXTENDS('adminlayout')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Loại thiết bị</title>
</head>
<body>
    <form method="POST">
        @csrf
       Loại <input type="text" name="loai" placeholder="Nhập loại">
       Tên <input type="text" name="ten" placeholder="Nhập tên">
       Ghi chú <input type="text" name="ghichu" placeholder="Ghi chú">
        <button type="submit">Đăng ký</button>
        
    </form>
</body>
</html>


@endsection