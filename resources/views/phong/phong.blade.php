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
    
    <table CLASS="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <tr>
            <td>Phòng</td>
            <td>Tên phòng</td>
            <td>Tầng </td>
        </tr>
        @forelse ($phong as $item)
        <tr>
            <td>{{$item->ID_phong}}</td>
            <td>{{$item->tenphong}}</td>
            <td>{{$item->ID_tang}}</td>
            <td><a href="{{url('/updatephong/'.$item->ID_phong)}}">Sửa</a></td>
            <td><a href="{{url('/deletephong/'.$item->ID_phong)}}">Xoá</a></td>
            
        </tr>
        @empty
        <tr>
            <td colspan="3" class="text-center">Danh sách rỗng</td>
        </tr>
        @endforelse
    </table>
</body>
</html>
@endsection