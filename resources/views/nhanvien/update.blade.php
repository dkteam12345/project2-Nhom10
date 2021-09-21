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
    @if($contact != NULL)
    <form method="POST">
        @csrf
        <table>
        <tr><td><p><b>Tên</b></p></td><td> <input style="width:390px; margin-left: 20px" value="{{$contact->name}}" type="text" name="name" placeholder="Nhập họ tên của bạn"></td></tr>
        <tr><td><p><b>Địa chỉ</b></p></td><td> <input style="width:390px; margin-left: 20px" value="{{$contact->address}}" type="text" name="address" placeholder="Nhập số của bạn"></td></tr>
        <tr><td><p><b>Số điện thoại</b></p></td><td> <input style="width:390px; margin-left: 20px" value="{{$contact->phone}}" type="text" name="phone" placeholder="Nhập sđt"></td></tr>
        <tr><td><p><b>Active</b></p></td><td> <input style="width:390px; margin-left: 20px" value="{{$contact->active}}" type="text" name="active" placeholder="Nhập active"></td></tr>
        </table><br>
        <button style="margin-left: 160px;" type="submit">Cập nhật</button>
    @else 
        <h1>Ko có dữ liệu</h1>
    @endif
    </form>
</body>
</html>
@endsection