@EXTENDS('layout.main')
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
        
        <input value="{{$contact->loai}}" type="text" name="loai" placeholder="Nhập loại">
        <input value="{{$contact->ten}}" type="text" name="ten" placeholder="Nhập tên">
        <input value="{{$contact->ghichu}" type="text" name="ghichu" placeholder="Ghi chú">
        <button type="submit">Cập nhật</button>
    @else 
        <h1>Ko có dữ liệu</h1>
    @endif
    </form>
</body>
</html>
@endsection