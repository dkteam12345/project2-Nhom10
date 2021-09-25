@EXTENDS('adminlayout')
@section('content')

<div class="p-4">

    <title>Document</title>

    <table class="table" id="datatable">
        <thead>
            <tr>
                <td>Tầng</td>
                <td>Nv quản lý</td>
            </tr>
        </thead>
        <tbody>
           @forelse ($tang as $item) 
           <tr>
                
                
                <td>{{$item->ID_tang}}</td>
                <td>{{$item->name}}</td>
            </tr>
            @empty
            <tr>
                <td colspan="2" class="text-center">Danh sách rỗng</td>
            </tr>
            @endforelse
         
        </tbody>
    </table> </div> 
    {{-- <table CLASS="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <tr>
           
            
        </tr>
      --}}
        {{-- <tr>
            
            <td><button class="btn btn-primary btn-icon-split"><a class="icon text-white-50" href="{{url('/updatetang/'.$item->ID_tang)}}">Sửa</a></button></td>
            <td><button class="btn btn-danger  btn-icon-split"><a class="icon text-white-50" href="{{url('/deletetang/'.$item->ID_tang)}}">Xoá</a></button></td>
           
            
        </tr>
       --}}



@endsection