@EXTENDS('adminlayout')
@section('content')
<div class="form-group">
  <script type="text/javascript">
    function check(){
        var name = document.getElementById("name").value;
        var soluong = document.getElementById("soluong").value;
        var ngaynhap = document.getElementById("ngaynhap").value;
        if (name == "" || soluong == "" || ngaynhap == "" ){
            alert('Xin hãy nhập đầy đủ thông tin');
            return false;
        }else{
            return true;
        }
    }
</script>
    <table>
    <form method="POST" onsubmit="return check()">
        @csrf
        
        <tr><td><p><b>Tên</b></p></td><td><input style="width:390px;margin-left: 20px" id="name" type="text" name="name" placeholder="Nhập tên" ></td></tr>
        
        <tr><td><p><b>Số lượng</b></p></td><td><input style="width:390px;margin-left: 20px " id="soluong" type="text" name="soluong" placeholder="Nhập số lượng" ></td></tr>
        
        <tr><td><p><b>Date</b></p></td><td><input style="width:390px;margin-left: 20px " id="ngaynhap" type="datetime-local" name="ngaynhap" placeholder="Nhập datetime"></td></tr>
        
        <tr><td><p><b><label for="cars">Tình trạng của thiết bị:</label></b></p></td><td>

<select  style="width:390px;margin-left: 20px " name="tinhtrang">
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



</div>
@endsection