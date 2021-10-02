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
{{-- <<<<<<< HEAD
       Loại <input type="text" name="loai" placeholder="Nhập loại">
       Tên <input type="text" name="ten" placeholder="Nhập tên">
       Ghi chú <input type="text" name="ghichu" placeholder="Ghi chú">
       <button class="btn btn-success btn-icon-split" type="submit" style="margin-left: 30px">Nhập</button>
======= --}}
        <table>
       <tr><td><p><b>Loại</b></p></td><td> <input style="width:390px; margin-left: 20px" type="text" name="loai" placeholder="Nhập loại"></td></tr>

       <tr><td><p><b>Ghi chú</b></p></td><td>  <input style="width:390px; margin-left: 20px" type="text" name="ghichu" placeholder="Ghi chú"></td></tr>
        </table><br>
        <button class="btn btn-success btn-icon-split" type="submit" style="margin-left: 160px; width: 60px;">Nhập</button>

        
    </form>
</body>
</html>


@endsection