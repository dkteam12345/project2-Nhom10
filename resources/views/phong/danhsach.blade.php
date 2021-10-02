@EXTENDS('adminlayout')
@section('dashboard')
<div>
    <table class="table" id="datatable">
        <thead>
            <tr>
                 <td>Loại</td>
                <td>Số lượng</td>
               
            </tr>
        </thead>
        <tbody>
    @foreach ($danhsach as $item)
        <tr>
            <td>{{$item->loai}}</td>
            <td>{{$item->soluong}}</td>
        </tr>
    @endforeach
        </tbody>
  </table>
</div>

@endsection