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
    <form method="POST">
        @csrf
        
        <input type="date" name="ngaykiemtra" placeholder="Nhập datetime">
        <input type="textarea" name="loaikiemke" placeholder="Thống kê">
        <input type="number" name='nhanvien' placeholder="Số nv">
        <input type="number" name='thietbi' placeholder="Số thiết bị">
        {{-- <div class="form-group">
            <label for="">Nhân viên/label>
            <select class="form-control" name="tang" id="">
            @forelse ($contacts as $contact)
                
                    <option value="{{$contact->ID_nv}}">{{$contact->nhanvien.name}}</option>
                    
            @empty
            
            @endforelse</div>
        </select>
        <div class="form-group">
          <label for=""></label>
          <select class="form-control" name="phong" id="">
            @forelse ($trangthietbi as $item)
                
            <option value="{{$item->ID_tb}}">{{$item->thietbi.name}}</option>
            
    @empty
    
    @endforelse
          </select>
        </div>
    </select> --}}
    
    
        <button type="submit">Đăng ký</button>
    </form>
</body>
</html>


@endsection
