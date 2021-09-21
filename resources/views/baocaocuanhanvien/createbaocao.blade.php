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
        <table>
        <tr><td><p><b>Ngày kiểm tra</b></p></td><td><input style="width:390px; margin-left: 20px" type="date" name="ngaykiemtra" placeholder="Nhập datetime"></td></tr>
        
        <div class="form-group">
          <label for=""></label>
          <tr><td><p><b>Thống kê</b></p></td><td><textarea style="width:390px; margin-left: 20px" type="" name="loaikiemke" rows="3" col="18" placeholder="Thống kê"></textarea></td></tr>
        </div>
        {{-- <input type="number" name='nhanvien' placeholder="Số nv">
        <input type="number" name='thietbi' placeholder="Số thiết bị"> --}}
        <div class="form-group">
            {{-- <label for="">Nhân viên/label>
            <select class="form-control" name="tang" id="">
            @forelse ($contacts as $contact)
                
                    <option value="{{$contact->ID_nv}}">{{$contact->nhanvien.name}}</option>
                    
            @empty
            
            @endforelse</div> --}}
            @php
                $input = Session::get('ss');
                
            @endphp
            
        </select>
        <div class="form-group">
          <label for=""></label>
          <tr><td><p><b>Thiết bị</b></p></td><td><select style="width:390px; margin-left: 20px" class="form-control" name="thietbi" id="">
            @forelse ($thietbi as $item)
                
            <option value="{{$item->ID_tb}}">{{$item->name}}</option>
            
    @empty
    
    @endforelse</td></tr>
          </select>
        </div>
    </select>
        </table><br>
    
        <button style="margin-left: 160px;" type="submit">Đăng ký</button>
    </form>
</body>
</html>


@endsection