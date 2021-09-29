@EXTENDS('adminlayout')
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
{{-- <<<<<<< HEAD
        <input type="text" name="name" placeholder="Nhập tên">
        <input type="text" name="address" placeholder="Nhập đc">
        <input type="text" name="phone" placeholder="Nhập sđt">
        <input type="text" name="active" placeholder="Nhập active">
        <button class="btn btn-success btn-icon-split" type="submit" style="margin-left: 30px">Nhập</button>
======= --}}
        <table>
        <tr><td><p><b>Tên</b></p></td><td> <input style="width:390px;margin-left: 20px" type="text" name="name" placeholder="Nhập tên"></td></tr>
        <tr><td><p><b>Địa chỉ</b></p></td><td><input style="width:390px;margin-left: 20px" type="text" name="address" placeholder="Nhập đc"></td></tr>
        <tr><td><p><b>Số điện thoại</b></p></td><td><input style="width:390px;margin-left: 20px" type="text" name="phone" placeholder="Nhập sđt"></td></tr>
        <label for="">Tình trạng hoạt động</label>
        <select style="width:390px;margin-left: 20px " name="active">
            <option value="0">Đang nghỉ</option>
            <option value="1">Đang hoạt động</option>
            
            
          </select></td></tr>
        </table><br>
        <button class="btn btn-success btn-icon-split" type="submit" style="margin-left: 160px; width: 60px;">Nhập</button>

    </form>
</body>
</html>


@endsection