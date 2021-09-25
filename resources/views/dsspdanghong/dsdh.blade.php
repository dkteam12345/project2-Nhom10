@extends('adminlayout')
@section('dashboard')
<div class="container-fluid">
    <div class='row'>
    <div class="col-lg-6">
    @foreach ($demspdh as $item)
        <div class="card mb-4 py-3 border-bottom-warning">
            <div class="card-body">
                {{$item->loai}} {{$item->dem}}
            </div>
</div>
@endforeach
</div>
</div>
</div>
<div class="col-lg-6">

    
   
@endsection