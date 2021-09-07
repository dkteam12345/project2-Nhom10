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
    <a href="{{url('/createbaocao')}}">Thêm báo cáo</a>
    <div class="input-group">
    
</div>
    <table CLASS="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <tr>
            
            <td>Nhân viên báo cáo</td>
            <td>Thiết bị bảo trì</td>
            <td>Ngày báo cáo</td>
            <td>Kiểm kê</td>
           
        </tr>
        @forelse ($baocao as $item)
        <tr>
            
            <td>{{$item->ID_nv}}</td>
            <td>{{$item->ID_tb}}</td>
            <td>{{$item->ngaykiemtra}}</td>
            <td>{{$item->loaikiemke}}</td>
           
            
        </tr>
        @empty
        <tr>
            <td colspan="4" class="text-center">Chưa có báo cáo</td>
        </tr>
        @endforelse
    </table>
</body>
</html>
@endsection