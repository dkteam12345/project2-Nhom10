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