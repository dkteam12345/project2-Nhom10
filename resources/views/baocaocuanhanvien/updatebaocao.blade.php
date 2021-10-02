@EXTENDS('adminlayout')
@section('content')
<div>
    @if($thietbi != NULL)
    <form method="POST">
        @csrf
        <table>
        <tr><td><p><b>Loại</b></p></td><td> <input style="width:390px; margin-left: 20px"  type="text" name="loai" placeholder="Nhập loại"></td></tr>
       <tr><td><p><b>Tên</b></p></td><td>  <input style="width:390px; margin-left: 20px"  type="text" name="ten" placeholder="Nhập tên"></td></tr>
       <tr><td><p><b>Ghi chú</b></p></td><td>  <input style="width:390px; margin-left: 20px"  type="text" name="ghichu" placeholder="Ghi chú"></td></tr>
        </table><br>
        <button class="btn btn-success btn-icon-split" type="submit" style="margin-left: 160px; width: 90px;">Cập nhật</button>
    @else 
        <h1>Ko có dữ liệu</h1>
    @endif
    </form>

</div>
@endsection