@extends('adminlayout')
@section('dashboard')
<style type="text/css">
.columns{
            float: left;
            width: 90%;
            padding: 10px;
        }
        .columns:nth-child(even){
            margin-left: 1%;
        }
</style>
<div class="container-fluid">
    <div class='row'>
    <div class="col" style="grid-template-columns: 10fr 10fr;display: grid">
    @foreach ($demspds as $item)
        <div class="card mb-4 py-3 border-bottom-danger columns">
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