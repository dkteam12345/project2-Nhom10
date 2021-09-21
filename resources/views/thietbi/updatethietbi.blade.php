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
    @if($thietbi != NULL)
    <form method="POST">
        @csrf
        <table>
        <tr><td><p><b>Loại</b></p></td><td> <input style="width:390px; margin-left: 20px" value="{{$thietbi->loai}}" type="text" name="loai" placeholder="Nhập loại"></td></tr>
       <tr><td><p><b>Tên</b></p></td><td>  <input style="width:390px; margin-left: 20px" value="{{$thietbi->ten}}" type="text" name="ten" placeholder="Nhập tên"></td></tr>
       <tr><td><p><b>Ghi chú</b></p></td><td>  <input style="width:390px; margin-left: 20px" value="{{$thietbi->ghichu}}" type="text" name="ghichu" placeholder="Ghi chú"></td></tr>
        </table><br>
        <button style="margin-left: 60px;" type="submit">Cập nhật</button>
    @else 
        <h1>Ko có dữ liệu</h1>
    @endif
    </form>
</body>
</html>
@endsection