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
        <table>
        <tr><td><p><b>Phòng</b></p></td><td><input style="width:390px; margin-left: 20px" value="{{$phong->tenphong}}" type="text" name="tenphong" placeholder="Nhập ten phong"></td></tr>
        <tr><td><p><b>Tầng</b></p></td><td><input style="width:390px; margin-left: 20px" value="{{$phong->ID_tang}}" type="text" name="ID_tang" placeholder="Nhập ID_tang"></td></tr>
        </table><br>
        <button class="btn btn-success btn-icon-split" type="submit" style="margin-left: 160px; width: 90px;">Cập nhật</button>
    @else 
        <h1>Ko có dữ liệu</h1>
    @endif
    </form>
</body>
</html>
@endsection