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
    <a href="{{url('/createtrangthietbi')}}">Thêm loại thiết bị</a>

    <form method="GET" action="{{route('search')}}" style="float: right; margin-right: 16px">
        {{-- @csrf --}}
        <input type="text" name="keywork" placeholder="Tim kiem">
        <button type="submit" class="btn-primary">Search</button>

    </form>

    <table CLASS="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <tr>
            
            <td>Tên</td>
            <td>Số lượng</td>
            <td>Ngày nhập</td>
            <td>Tình trạng</td>
            <td>Tầng</td>
            <td>Phòng</td>
            <td>Loại</td>
        </tr>
        @forelse ($trangthietbi as $item)
        <tr>
            
            <td>{{$item->name}}</td>
            <td>{{$item->soluong}}</td>
            <td>{{$item->ngaynhap}}</td>
            <td>{{$item->tinhtrang==1?'Ổn định':'Đang bảo trì'}}</td>
            <td>{{$item->ID_phong}}</td>
            <td>{{$item->ID_tang}}</td>
            <td>{{$item->ID_loai}}</td>
            
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