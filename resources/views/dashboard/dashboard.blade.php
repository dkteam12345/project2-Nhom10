@extends('adminlayout')
@section('dashboard')
    <div>
        <div class="card mb-4 py-3 border-left-primary">
            <div class="card-body">
                Hiện tại đang có {{$demtb->dem}} thiết bị 
            </div>
        </div>
        <div class="card mb-4 py-3 border-left-secondary">
            <div class="card-body">
               Tổng số các bản báo cáo là {{$dembc->dem}}
            </div>
        </div>
        <div class="card mb-4 py-3 border-left-secondary">
            <div class="card-body">
                Nhân viên ở phòng lab là {{$demnv->dem}} xem danh sách nhân viên  <a href="{{url('/test')}}">ở đây</a>
            </div>
        </div>
        <div class="card mb-4 py-3 border-left-secondary">
            <div class="card-body">
                {{$demsp->countmt}}
            </div>
        </div>
    </div>
    <div>
        
    </div>
@endsection