@extends('adminlayout')
@section('dashboard')

    <div class="row">
        
        
        <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Nhân viên ở phòng lab là  xem danh sách nhân viên  <a href="{{url('/test')}}">ở đây</a></div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{$demnv->dem}}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                </div>

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
        </div>
        
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1"> Số lượng thiết bị đang bảo trì xem chi tiết  <a class="text-xs font-weight-bold text-warning text-uppercase mb-1" href="{{url('/dsdh')}}">ở đây</a>
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{$demspdanghong->dem}}</div>
                                </div>
                                <div class="col">
                                    <div class="progress progress-sm mr-2">
                                        <div class="progress-bar bg-info" role="progressbar"
                                            style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

       
        
    
    
    
    
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            Số lượng thiết bị đang sử dụng là xem chi tiết ở đây <a class="text-xs font-weight-bold text-success text-uppercase mb-1" href="{{url('/dsod')}}">ở đây</a></div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{$demspondinh->dem}}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    



<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-danger shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                        Số lượng thiết bị đang sửa chữa xem chi tiết <a class="text-xs font-weight-bold text-danger text-uppercase mb-1" href="{{url('/dsds')}}">ở đây</a></div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{$demspdanghong->dem}}</div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-exclamation-triangle fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

            

       
    </div>
    <div>
        
    </div>
@endsection