@EXTENDS('adminlayout')
@section('content')

<div class="p-4">
        <table class="table" id='datatable'>
            <thead>
                <tr>
                    <td>Phòng</td>
            <td>Tên phòng</td>
            <td>Tầng </td>
            <td>Số lượng</td>
            <td>Detail</td>
                </tr>
            </thead>
            <tbody>
                @forelse ($phong as $item)
        <tr>
            <td>{{$item->ID_phong}}</td>
            <td>{{$item->tenphong}}</td>
            <td>{{$item->ID_tang}}</td>
            <td>{{$item->soluong}}</td>
            <td><button class="btn btn-success btn-icon-split"><a href="{{url('/danhsach/'.$item->ID_phong)}}">Detail</a></button></td>
            {{-- <td><button class="btn btn-primary btn-icon-split"><a class="icon text-white-50" href="{{url('/updatephong/'.$item->ID_phong)}}">Sửa</a></button></td>
            <td><button class="btn btn-danger  btn-icon-split"><a class="icon text-white-50" href="{{url('/deletephong/'.$item->ID_phong)}}">Xoá</a></button></td>
             --}}
        </tr>
        @empty
        <tr>
            <td colspan="3" class="text-center">Danh sách rỗng</td>
        </tr>
        @endforelse
            </tbody>
        </table>
   
  

    </div>

@endsection