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
    @if($tang != NULL)
    <form method="POST">
        @csrf
        <table>
        <tr><td><p><b>ID_Nhân viên</b></p></td><td><input style="width:390px; margin-left: 20px" value="{{$tang->ID_nv}}" type="text" name="ID_nv" placeholder="Nhập ID_nv"></td></tr>
        </table><br>
        <button style="margin-left: 160px;" type="submit">Cập nhật</button>
    @else 
        <h1>Ko có dữ liệu</h1>
    @endif
    </form>
</body>
</html>
@endsection