@extends('adminlayout')
@section('dashboard')
<div class="p-4">

    <title>Document</title>

    <table class="table" id="datatable">
        <thead>
            <tr>
                <td>Loại thiết bị</td>
                <td>Số lượng</td>
                <td>Phòng</td>
            </tr>
        </thead>
        <tbody>
           @forelse ($demspdh as $item) 
           <tr>
                
                
                <td>{{$item->loai}}</td>
                <td>{{$item->dem}} </td>
                <td>{{$item->phong}}</td>
            </tr>
            @empty
            <tr>
                <td colspan="2" class="text-center">Danh sách rỗng</td>
            </tr>
            @endforelse
         
        </tbody>
    </table> </div> 

    
   
@endsection