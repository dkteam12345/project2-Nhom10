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
        <input type="text" name="name" placeholder="Nhập tên">
        <input type="text" name="soluong" placeholder="Nhập số lượng">
        <input type="date" name="ngaynhap" placeholder="Nhập datetime">
        <input type="text" name="tinhtrang" placeholder="Nhập tình trạng">
        <div class="form-group">
            <label for=""><b>Tầng</b></label>
            <select class="form-control" style="width:190px; margin-left: 20px" name="tang" id="">
            @forelse ($tang as $item)
                
                    <option value="{{$item->ID_tang}}">{{$item->ID_tang}}</option>
                    
            @empty
            
            @endforelse</div>
        </select>
        <div class="form-group">
          <label for=""><b>Phòng</b></label>
          <select class="form-control" style="width:190px; margin-left: 20px" name="phong" id="">
            @forelse ($phong as $item)
                
            <option value="{{$item->ID_phong}}">{{$item->ID_phong}}</option>
            
    @empty
    
    @endforelse
          </select>
        </div>
    </select>
    <div class="form-group">
      <label for=""><b>Loại thiết bị</b></label>
      <select class="form-control" style="width:190px; margin-left: 20px" name="loai" id="">
        @forelse ($thietbi as $item)
            
        <option value="{{$item->ID_loai}}">{{$item->ten}}</option>
        
@empty

@endforelse
      </select>
    </div>
        <button type="submit" style="margin-left: 30px">Nhập</button>
    </form>
</body>
</html>


@endsection