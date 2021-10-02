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
<body><table>
    <form method="POST">
        @csrf
        
        <tr><td><p><b>Tên</b></p></td><td><input style="width:390px;margin-left: 20px" type="text" name="name" placeholder="Nhập tên" required></td></tr>
        
        <tr><td><p><b>Số lượng</b></p></td><td><input style="width:390px;margin-left: 20px " type="text" name="soluong" placeholder="Nhập số lượng" required></td></tr>
        
        <tr><td><p><b>Date</b></p></td><td><input style="width:390px;margin-left: 20px " type="datetime-local" name="ngaynhap" placeholder="Nhập datetime" required></td></tr>
        
        <tr><td><p><b><label for="cars">Tình trạng của thiết bị:</label></b></p></td><td>

<select style="width:390px;margin-left: 20px " name="tinhtrang">
  <option value="0">Đang hỏng</option>
  <option value="1">Ổn định</option>
  <option value="2">Đang bảo trì</option>
  
</select></td></tr>
        
     
        <div class="form-group">
        <tr><td><p><b>Phòng</b></p></td><td>
          <select class="form-control" style="width:390px; margin-left: 20px" name="phong" id="">
            @forelse ($phong as $item)
                
            <option value="{{$item->ID_phong}}">{{$item->ID_phong}}</option>
            
    @empty</td></tr>
    
    @endforelse
          </select>
        </div>
    </select>
    <div class="form-group">
  <tr><td><p><b>Loại thiết bị</b></p></td><td>
      <select class="form-control" style="width:390px; margin-left: 20px" name="loai" id="">
        @forelse ($thietbi as $item)
            
        <option required value="{{$item->ID_loai}}">{{$item->loai}}</option>
        
@empty</td></tr>

@endforelse
      </select>  
    </div>
<br>

        <button class="btn btn-success btn-icon-split" type="submit" style="margin-left: 30px">Nhập</button>
    </form>

        {{-- <button type="submit" style="margin-left: 30px">Nhập</button>
    </form> --}}
</table>

</body>
</html>


@endsection