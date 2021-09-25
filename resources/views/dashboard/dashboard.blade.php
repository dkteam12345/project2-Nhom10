@extends('adminlayout')
@section('dashboard')
    <div class="row p-4" >
        
        
        <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Số lượng bản báo cáo là xem chi tiết <a class="text-xs font-weight-bold text-primary text-uppercase mb-1" href={{'/baocao'}}>ở đây</a></div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{$dembc->dem}}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                </div>
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
                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{$demspdangsua->dem}}</div>
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