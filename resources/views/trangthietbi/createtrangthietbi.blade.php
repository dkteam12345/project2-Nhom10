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
            <label for="">Tầng</label>
            <select class="form-control" name="tang" id="">
            @forelse ($tang as $item)
                
                    <option value="{{$item->ID_tang}}">{{$item->ID_tang}}</option>
                    
            @empty
            
            @endforelse</div>
        </select>
        <div class="form-group">
          <label for=""></label>
          <select class="form-control" name="phong" id="">
            @forelse ($phong as $item)
                
            <option value="{{$item->ID_phong}}">{{$item->ID_phong}}</option>
            
    @empty
    
    @endforelse
          </select>
        </div>
    </select>
    <div class="form-group">
      <label for=""></label>
      <select class="form-control" name="loai" id="">
        @forelse ($thietbi as $item)
            
        <option value="{{$item->ID_loai}}">{{$item->loai}}</option>
        
@empty

@endforelse
      </select>
    </div>
        <button type="submit">Đăng ký</button>
    </form>
</body>
</html>


@endsection