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
<div>
    @if($thietbi != NULL)
    <form method="POST" onsubmit="return check()">
        @csrf
        <table>
        <tr><td><p><b>Loại</b></p></td><td> <input style="width:390px; margin-left: 20px" id="loai" value="{{$thietbi->loai}}" type="text" name="loai" placeholder="Nhập loại"></td></tr>
       
       <tr><td><p><b>Ghi chú</b></p></td><td>  <input style="width:390px; margin-left: 20px" id="ghichu" value="{{$thietbi->ghichu}}" type="text" name="ghichu" placeholder="Ghi chú"></td></tr>
        </table><br>
        <button class="btn btn-success btn-icon-split" type="submit" style="margin-left: 160px; width: 90px;">Cập nhật</button>
    @else 
        <h1>Ko có dữ liệu</h1>
    @endif
    </form>
</div>
@endsection