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
    @if($trangthietbi != NULL)
    <form method="POST">
        @csrf
        <table>
        <tr><td><p><b>Tên</b></p></td><td><input style="width:390px;margin-left: 20px" value="{{$trangthietbi->name}}" type="text" name="name" placeholder="Nhập tên"></td></tr>
        
        <tr><td><p><b>Số lượng</b></p></td><td><input style="width:390px;margin-left: 20px" value="{{$trangthietbi->soluong}}" type="text" name="soluong" placeholder="Nhập số lượng"></td></tr>
        
        <tr><td><p><b>Date</b></p></td><td><input style="width:390px;margin-left: 20px" value="{{$trangthietbi->ngaynhap}}" type="date" name="ngaynhap" placeholder="Nhập datetime"></td></tr>
        
        
        <tr><td><p><b> <label for="cars">Tình trạng của thiết bị:</label></b></p></td><td>

<select style="width:390px;margin-left: 20px" name="tinhtrang">
  <option value="0">Đang hỏng</option>
  <option value="1">Ổn định</option>
  <option value="2">Đang bảo trì</option>
  
</select></td></tr>
        
<div class="form-group">
    <tr><td><p><b>Loại thiết bị</b></p></td><td>
        <select class="form-control" style="width:390px; margin-left: 20px" name="loai" id="">
          @forelse ($loaithietbi as $item)
              
          <option value="{{$item->ID_loai}}">{{$item->ten}}</option>
          
  @empty</td></tr>
  
  @endforelse
        </select>  
      </div>
        <div class="form-group">
            <tr><td><p><b>Phòng</b></p></td><td>
              <select class="form-control" style="width:390px; margin-left: 20px" name="phong" id="">
                @forelse ($phong as $item)
                    
                <option value="{{$item->ID_phong}}">{{$item->ID_phong}}</option>
                
        @empty</td></tr>
        
        @endforelse
              </select>
            </div>
        
        </table><br>
<button class="btn btn-success btn-icon-split" type="submit" style="margin-left: 190px; width: 90px;">Cập nhật</button>
    @else 
        <h1>Ko có dữ liệu</h1>
    @endif
    </form>
</body>
</html>
@endsection