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
    <a href="{{url('/createthietbi')}}">Thêm loại thiết bị</a>
    <table CLASS="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <tr>
            
            <td>Loại</td>
            <td>Tên</td>
            <td>Ghi chú</td>
            <td colspan="2">Action</td>
        </tr>
        @forelse ($thietbi as $item)
        <tr>
            
            <td>{{$item->loai}}</td>
            <td>{{$item->ten}}</td>
            <td>{{$item->ghichu}}</td>
            <td><button class="btn btn-primary btn-icon-split"><a class="icon text-white-50" href="{{url('/updatethietbi/'.$item->ID_loai)}}">Sửa</a></button></td>
            <td><button class="btn btn-danger  btn-icon-split"><a class="icon text-white-50" href="{{url('/deletethietbi/'.$item->ID_loai)}}">Xoá</a></td>
        </tr>
        @empty
        <tr>
            <td colspan="6" class="text-center">Danh sách rỗng</td>
        </tr>
        @endforelse
    </table>
</body>
</html>
@endsection