@extends('adminlayout')
@section('dashboard')
<div class="container-fluid">
    <div class="col-lg-6">
    @foreach ($demspod as $item)
        <div class="card mb-4 py-3 border-bottom-success">
            <div class="card-body">
                {{$item->loai}}:{{$item->dem}}
            </div>
</div>
@endforeach
</div>

</div>
@endsection