@EXTENDS('adminlayout')
@section('content')
<!DOCTYPE html>

    <a href="{{url('/createtrangthietbi')}}">Thêm loại thiết bị</a>
    <div class="p-4">

        <title>Document</title>
    
        <table class="table" id="datatable">
            <thead>
                <tr>
                    <td>Tên</td>
                    <td>Số lượng</td>
                    <td>Ngày nhập</td>
                    <td>Tình trạng</td>
                    <td>Phòng</td>
                    <td>Tầng</td>
                    <td>Loại</td>
                    <td>Action</td>
                </tr>
            </thead>
            <tbody>
                @forelse ($trangthietbi as $item)
                <tr>
                    
                    <td>{{$item->name}}</td>
                    <td>{{$item->soluong}}</td>
                    <td>{{$item->ngaynhap}}</td>
                    <td>{{$item->tinhtrang==1?'Ổn định':($item->tinhtrang==0?'Đang bảo trì':'Đang sửa')}}</td>
                    <td>{{$item->ID_phong}}</td>
                    <td>{{$item->ID_tang}}</td>
                    <td>{{$item->ten}}</td>
                    <td><button class="btn btn-primary btn-icon-split"><a class="icon text-white-50" href="{{url('/updatetrangthietbi/'.$item->ID_tb)}}">Sửa</a></button></td>
                    {{-- <td><a href="{{url('/deletetrangthietbi/'.$item->ID_tb)}}">Xoá</a></td> --}}
        
        
        
                </tr>
                @empty
                <tr>
                    <td colspan="6" class="text-center">Danh sách rỗng</td>
                </tr>
                @endforelse
             
            </tbody>
        </table> </div> 
    

   


@endsection