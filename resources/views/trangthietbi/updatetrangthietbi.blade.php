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
        
        <input value="{{$trangthietbi->name}}" type="text" name="name" placeholder="Nhập name">
        <input value="{{$trangthietbi->soluong}}" type="text" name="soluong" placeholder="Nhập số lượng">
        <input value="{{$trangthietbi->ngaynhap}" type="text" name="ngaynhap" placeholder="Ngày nhập">
        <input value="{{$trangthietbi->tinhtrang}" type="text" name="tinhtrang" placeholder="Tình trạng">
        <input value="{{$trangthietbi->ID_loai}" type="text" name="ID_loai" placeholder="Nhập ID_loai">
        <input value="{{$trangthietbi->ID_phong}" type="text" name="ID_phong" placeholder="Nhập ID_phong">
        <input value="{{$trangthietbi->ID_tang}" type="text" name="ID_tang" placeholder="Nhập ID_tang">
        <button type="submit">Cập nhật</button>
    @else 
        <h1>Ko có dữ liệu</h1>
    @endif
    </form>
</body>
</html>
@endsection