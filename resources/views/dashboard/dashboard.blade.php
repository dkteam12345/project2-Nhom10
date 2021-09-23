@extends('adminlayout')
@section('dashboard')
    <div>

        <div class="card mb-4 py-3 border-left-primary">
            <div class="card-body">
                <table>
            <tr><td><i style="color: blue; font-size: 50px; margin-right: 10px;" class="fas fa-tv"></i></td><td><b style="font-size: 40px;margin-left: 50px;"> {{$demtb->dem}} </b><br><b>Tất cả các thiết bị</b> <a href="{{url('/trangthietbi')}}">View</a></td></tr></table>
            </div>
        </div>


        <div class="card mb-4 py-3 border-left-secondary">
            <div class="card-body">
                <table>
            <tr><td><i style="color: blue; font-size: 55px; margin-right: 10px;" class="far fa-chart-bar"></i> </td><td><b style="font-size: 40px;margin-left: 50px;"> {{$dembc->dem}}</b><br><b>Báo cáo thống kê</b>  <a href="{{url('/baocao')}}">View</a></td></tr></table>
            </div>
        </div>
        <div class="card mb-4 py-3 border-left-secondary">
            <div class="card-body">
                <table>
            <tr><td><i style="color: blue; font-size: 55px; margin-right: 10px;" class="fas fa-users"></i></td><td><b style="font-size: 40px;margin-left: 50px;"> {{$demnv->dem}}</b><br><b>Nhân viên quản lý phòng lab</b>   <a href="{{url('/test')}}">View</a></td></tr></table>
            </div>
        </div> 
        
        @foreach ($demspd as $item)
        
        <a href="#"  class="btn btn-success btn-icon-split disabled">
            <span class="icon text-white-50">
                <i class="fas fa-check"></i>
            </span>
            <span class="text">Số lượng {{$item->loai}} ổn định và đang dùng là:{{$item->dem}} </span>
        </a> @endforeach
        
    </div> 
    
    @foreach ($demspb as $item)
    
    <a href="#" class="btn btn-warning btn-icon-split disabled">
        <span class="icon text-white-50">
            <i class="fas fa-exclamation-triangle"></i>
        </span>
        <span class="text">Số lượng {{$item->loai}} đang bảo trì:{{$item->dem}}</span>
    </a> @endforeach 
    
</div> 

@foreach ($demspo as $item)

<a href="#" class="btn btn-danger btn-icon-split disabled">
    <span class="icon text-white-50">
        <i class="fas fa-trash"></i>
    </span>
    <span class="text">Số lượng {{$item->loai}} đang sửa chữa:{{$item->dem}}</span>
</a> @endforeach 
            

       
    </div>
    <div>
        
    </div>
@endsection