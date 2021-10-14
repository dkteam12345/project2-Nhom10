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
<div class="form-group">
    <form method="POST" onsubmit="return check()">
        @csrf
{{-- <<<<<<< HEAD
        <input type="text" name="name" placeholder="Nhập tên">
        <input type="text" name="address" placeholder="Nhập đc">
        <input type="text" name="phone" placeholder="Nhập sđt">
        <input type="text" name="active" placeholder="Nhập active">
        <button class="btn btn-success btn-icon-split" type="submit" style="margin-left: 30px">Nhập</button>
======= --}}
        <table>
        <tr><td><p><b>Tên</b></p></td><td> <input style="width:390px;margin-left: 20px" id="name" type="text" name="name" placeholder="Nhập tên"></td></tr>
        <tr><td><p><b>Địa chỉ</b></p></td><td><input style="width:390px;margin-left: 20px" id="address" type="text" name="address" placeholder="Nhập đc"></td></tr>
        <tr><td><p><b>Số điện thoại</b></p></td><td><input style="width:390px;margin-left: 20px" id="phone" type="text" name="phone" placeholder="Nhập sđt"></td></tr>
        <label for="">Tình trạng hoạt động</label>
        <select style="width:390px;margin-left: 20px " name="active">
            <option value="0">Đang nghỉ</option>
            <option value="1">Đang hoạt động</option>
            
            
          </select></td></tr>
        </table><br>
        <button class="btn btn-success btn-icon-split" type="submit" style="margin-left: 160px; width: 60px;">Nhập</button>
</div>

@endsection