@EXTENDS('adminlayout')
@section('content')
<script type="text/javascript">
    function check(){
        var loai = document.getElementById("loai").value;
        var ghichu = document.getElementById("ghichu").value;
        
        if (loai == "" || ghichu == ""  ){
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
       Loại <input type="text" name="loai" placeholder="Nhập loại">
       Tên <input type="text" name="ten" placeholder="Nhập tên">
       Ghi chú <input type="text" name="ghichu" placeholder="Ghi chú">
       <button class="btn btn-success btn-icon-split" type="submit" style="margin-left: 30px">Nhập</button>
======= --}}
        <table>
       <tr><td><p><b>Loại</b></p></td><td> <input style="width:390px; margin-left: 20px" id="loai" type="text" name="loai" placeholder="Nhập loại"></td></tr>

       <tr><td><p><b>Ghi chú</b></p></td><td>  <input style="width:390px; margin-left: 20px" type="text" id="ghichu" name="ghichu" placeholder="Ghi chú"></td></tr>
        </table><br>
        <button class="btn btn-success btn-icon-split" type="submit" style="margin-left: 160px; width: 60px;">Nhập</button>

        
    </form>

</div>

@endsection