@EXTENDS('layout.main')
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
    <a href="{{url('/create')}}">Thêm liên hệ</a>
    <table style="border-block-width: ">
        <tr>
            <td>Name</td>
            <td>Address</td>
            <td colspan="2">Action</td>
        </tr>
        @forelse ($contacts as $contact)
        <tr>
            <td>{{$contact->name}}</td>
            <td>{{$contact->address}}</td>
            <td><a href="{{url('/edit/'.$contact->id)}}">Sửa</a></td>
            <td><a href="{{url('/delete/'.$contact->id)}}">Xoá</a></td>
        </tr>
        @empty
        <tr>
            <td colspan="4" class="text-center">Danh sách rỗng</td>
        </tr>
        @endforelse
    </table>
</body>
</html>
@endsection