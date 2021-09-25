@EXTENDS('adminlayout')
@section('content')
<div>
    <a href="{{url('/create')}}">Thêm liên hệ</a>
    <div class="p-4">

        <title>Document</title>
    
        <table class="table" id="datatable">
            <thead>
                <tr> 
                    <td>Name</td>
                    <td>Address</td>
                    <td>Phone</td>
                    <td>Active</td>
                    <td >Action</td>
                </tr>
            </thead>
            <tbody>
                @forelse ($contacts as $contact)
        <tr>
            <td>{{$contact->name}}</td>
            <td>{{$contact->address}}</td>
            <td>{{$contact->phone}}</td>
            <td>@if ($contact->active==1 )
                <a href="{{url('/test/switchstatus/'.$contact->ID_nv)}}" class="btn btn-success btn-circle">
                    <i class="fas fa-check"></i>
                </a>
            @else
            <a href="{{url('/test/switchstatus/'.$contact->ID_nv)}}" class="btn btn-danger btn-circle"><i class="fas fa-ban"></i></a>
            @endif
        </td>
            <td><button class="btn btn-primary btn-icon-split"><a class="icon text-white-50" href="{{url('/edit/'.$contact->ID_nv)}}">Sửa</a></button></td>
          
        </tr>
        @empty
        <tr>
            <td colspan="6" class="text-center">Danh sách rỗng</td>
        </tr>
        @endforelse
             
            </tbody>
        </table> </div> 
    <table CLASS="table table-bordered" id="datatable" width="100%" cellspacing="0">
        <tr>
           
        </tr>
       
    </table>
</div>
@endsection