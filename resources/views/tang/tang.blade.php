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
            <td>ID tang</td>
            <td>ID nhan vien</td>
        </tr>
        @forelse ($tang as $item)
        <tr>
           
                <tr>
                    <td>{{$item->ID_tang}}</td>
                    <td>{{$item->ID_nv}}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="3">Ko co tang</td>
                </tr>
            
            
            @endforelse
        </tr>
    </table>
</body>
</html>
@endsection