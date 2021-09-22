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
        
        <tr><td><p><b>Tên</b></p></td><td><input style="width:390px;margin-left: 20px" type="text" name="name" placeholder="Nhập tên"></td></tr>
        
        <tr><td><p><b>Số lượng</b></p></td><td><input style="width:390px;margin-left: 20px " type="text" name="soluong" placeholder="Nhập số lượng"></td></tr>
        
        <tr><td><p><b>Date</b></p></label></td><td><input style="width:390px;margin-left: 20px " type="date" name="ngaynhap" placeholder="Nhập datetime"></td></tr>
        
        <label for="cars">Tình trạng của thiết bị:</label>

<select name="tinhtrang">
  <option value="0">Đang hỏng</option>
  <option value="1">Ổn định</option>
  <option value="2">Đang bảo trì</option>
  
</select>
        
        <tr><td><p><b>Tầng</b></p></td><td>
            <select class="form-control" style="width:390px; margin-left: 20px" name="tang" id="">
            @forelse ($tang as $item)
                
                    <option value="{{$item->ID_tang}}">{{$item->ID_tang}}</option>
                    
            @empty</td></tr>
            
            @endforelse
        </select>
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
            
        <option value="{{$item->ID_loai}}">{{$item->ten}}</option>
        
@empty</td></tr>

@endforelse
      </select>
    </div>


        <button class="btn btn-success btn-icon-split" type="submit" style="margin-left: 30px">Nhập</button>
    </form>

        {{-- <button type="submit" style="margin-left: 30px">Nhập</button>
    </form> --}}
</table>

</body>
</html>


@endsection