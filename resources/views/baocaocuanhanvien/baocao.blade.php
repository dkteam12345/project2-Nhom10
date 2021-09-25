@EXTENDS('adminlayout')
@section('content')

    <a href="{{url('/createbaocao')}}">Thêm báo cáo</a>
    <div class="input-group">
    
</div>
<div class="p-4">
    <table class="table" id='datatable'>
        <thead>
            <tr>
                    
            <td>Nhân viên báo cáo</td>
            <td>Thiết bị bảo trì</td>
            <td>Ngày báo cáo</td>
            <td>Kiểm kê</td>
            </tr>
        </thead>
        <tbody>
            @forelse ($baocao as $item)
            <tr>
                
                <td>{{$item->tennv}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->ngaykiemtra}}</td>
                <td>{{$item->loaikiemke}}</td>
               
                
            </tr>
            @empty
            <tr>
                <td colspan="4" class="text-center">Chưa có báo cáo</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
    
@endsection

