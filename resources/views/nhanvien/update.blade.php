@EXTENDS('adminlayout')
@section('content')
<script type="text/javascript">
    function check(){
        var phone = document.getElementById("phone").value;
        var address = document.getElementById("address").value;
        var name = document.getElementById("name").value;
        if (phone == "" || address == "" || name=="" ){
            alert('Xin hãy nhập đầy đủ thông tin');
            return false;
        }else{
            return true;
        }
    }
</script>
    @if($contact != NULL)
    <form method="POST" onsubmit="return check()">
        @csrf
        <table>
        <tr><td><p><b>Tên</b></p></td><td> <input style="width:390px; margin-left: 20px" value="{{$contact->name}}" type="text" name="name" placeholder="Nhập họ tên của bạn"></td></tr>
        <tr><td><p><b>Địa chỉ</b></p></td><td> <input style="width:390px; margin-left: 20px" value="{{$contact->address}}" type="text" name="address" placeholder="Nhập số của bạn"></td></tr>
        <tr><td><p><b>Số điện thoại</b></p></td><td> <input style="width:390px; margin-left: 20px" value="{{$contact->phone}}" type="text" name="phone" placeholder="Nhập sđt"></td></tr>
        <label for="">Tình trạng hoạt động</label>
        <select style="width:390px;margin-left: 20px " name="active">
            <option value="0">Đang nghỉ</option>
            <option value="1">Đang hoạt động</option>
            
            
          </select></td></tr>
        </table><br>
        <button class="btn btn-success btn-icon-split" type="submit" style="margin-left: 160px; width: 90px;">Cập nhật</button>
    @else 
        <h1>Ko có dữ liệu</h1>
    @endif
    </form>

@endsection