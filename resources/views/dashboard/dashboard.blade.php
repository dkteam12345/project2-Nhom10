@extends('adminlayout')
@section('dashboard')
    <div>
        <div class="card mb-4 py-3 border-left-primary">
            <div class="card-body">
               <b> Hiện tại đang có {{$demtb->dem}} thiết bị </b>
            </div>
        </div>
        <div class="card mb-4 py-3 border-left-secondary">
            <div class="card-body">
              <b> Tổng số các bản báo cáo là {{$dembc->dem}}</b>
            </div>
        </div>
        <div class="card mb-4 py-3 border-left-secondary">
            <div class="card-body">
               <b> Nhân viên ở phòng lab là {{$demnv->dem}} xem danh sách nhân viên  <a href="{{url('/test')}}">ở đây</a></b>
            </div>
        </div>
        <div class="card mb-4 py-3 border-left-secondary">
            <div class="card-body">
                .border-left-secondary
            </div>
        </div>
    </div>
    <div>
        
    </div>
@endsection