@EXTENDS('layout.main')
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
    <a href="{{url('/create')}}">Thêm loại thiết bị</a>
    <table CLASS="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <tr>
            <td>ID</td>
            <td>Loại</td>
            <td>Tên</td>
            <td>Ghi chú</td>
            <td colspan="2">Action</td>
        </tr>
        @forelse ($contacts as $contact)
        <tr>
            <td>{{$contact->ID}}</td>
            <td>{{$contact->loai}}</td>
            <td>{{$contact->ten}}</td>
            <td>{{$contact->ghichu}}</td>
            <td><a href="{{url('/edit/'.$contact->ID_loai)}}">Sửa</a></td>
            <td><a href="{{url('/delete/'.$contact->ID_loai)}}">Xoá</a></td>
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