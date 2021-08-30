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
    <table CLASS="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <tr>
            <td>Số phòng</td>
            <td>Tên phòng</td>
            <td>Tầng</td>
        </tr>
        @forelse ($phong as $item)
        <tr>
           
                <tr>
                    <td>{{$item->ID_phong}}</td>
                    <td>{{$item->tenphong}}</td>
                    <td>{{$item->ID_tang}}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="3">Ko cos Phong</td>
                </tr>
            
            
            @endforelse
        </tr>
    </table>
</body>
</html>
@endsection