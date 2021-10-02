@EXTENDS('adminlayout')
@section('content')


    <div class="p-4">
        <a href="{{url('/createthietbi')}}">Thêm loại thiết bị</a>
        <table class="table" id='datatable'>
            
            <thead>
                <tr>
                    <td>Loại</td>
                    
                    <td>Ghi chú</td>
                    <td>Action</td>
                </tr>
            </thead>
            <tbody>
                @forelse ($thietbi as $item)
                <tr>
                    
                    <td>{{$item->loai}}</td>
                   
                    <td>{{$item->ghichu}}</td>
                    <td><button class="btn btn-primary btn-icon-split"><a class="icon text-white-50" href="{{url('/updatethietbi/'.$item->ID_loai)}}">Sửa</a></button></td>
        
                </tr>
                @empty
                <tr>
                    <td colspan="6" class="text-center">Danh sách rỗng</td>
                </tr>
                @endforelse
            </tbody>
        </table>
   
</div>
@endsection