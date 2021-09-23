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
    @if($trangthietbi != NULL)
    <form method="POST">
        @csrf
        <table>
        <tr><td><p><b>Tên</b></p></td><td><input style="width:390px;margin-left: 20px" value="{{$trangthietbi->name}}" type="text" name="name" placeholder="Nhập tên"></td></tr>
        
        <tr><td><p><b>Số lượng</b></p></td><td><input style="width:390px;margin-left: 20px" value="{{$trangthietbi->soluong}}" type="text" name="soluong" placeholder="Nhập số lượng"></td></tr>
        
        <tr><td><p><b>Date</b></p></td><td><input style="width:390px;margin-left: 20px" value="{{$trangthietbi->ngaynhap}}" type="date" name="ngaynhap" placeholder="Nhập datetime"></td></tr>
        
        
        <tr><td><p><b> <label for="cars">Tình trạng của thiết bị:</label></b></p></td><td>

<select style="width:390px;margin-left: 20px" name="tinhtrang">
  <option value="0">Đang hỏng</option>
  <option value="1">Ổn định</option>
  <option value="2">Đang bảo trì</option>
  
</select></td></tr>
        
        <tr><td><p><b>Loại thiết bị</b></p></td><td>
        <input style="width:390px;margin-left: 20px" value="{{$trangthietbi->ID_loai}}" type="number" name="ID_loai" placeholder="Nhập ID_loai"></td></tr>
        <tr><td><p><b>Phòng</b></p></td><td><input style="width:390px;margin-left: 20px" value="{{$trangthietbi->ID_phong}}" type="number" name="ID_phong" placeholder="Nhập ID_phong"></td></tr>
        <tr><td><p><b>Tầng</b></p></td><td><input style="width:390px;margin-left: 20px" value="{{$trangthietbi->ID_tang}}" type="number" name="ID_tang" placeholder="Nhập ID_tang"></td></tr>
</table><br>
<button class="btn btn-success btn-icon-split" type="submit" style="margin-left: 190px; width: 90px;">Cập nhật</button>
    @else 
        <h1>Ko có dữ liệu</h1>
    @endif
    </form>
</body>
</html>
@endsection