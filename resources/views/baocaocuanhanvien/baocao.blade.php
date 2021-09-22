@EXTENDS('adminlayout')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <script>
        $(document).ready(function() {
         
        $('#dataTable').dataTable({''}); 
             
        } ); 
      </script>   
    <title>Loại thiết bị</title>
</head>
<body>
    <a href="{{url('/createbaocao')}}">Thêm báo cáo</a>
    <div class="input-group">
    
</div>
    <table CLASS="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <tr>
            
            <td>Nhân viên báo cáo</td>
            <td>Thiết bị bảo trì</td>
            <td>Ngày báo cáo</td>
            <td>Kiểm kê</td>
           
        </tr>
        @forelse ($baocao as $item)
        <tr>
            
            <td>{{$item->tennv}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->ngaykiemtra}}</td>
            <td>{{$item->loaikiemke}}</td>
           
            
        </tr>
        @empty
        <tr>
            <td colspan="4" class="text-center">Chưa có báo cáo</td>
        </tr>
        @endforelse
    </table>
      <!-- Bootstrap core JavaScript-->
      <script src="vendor/jquery/jquery.min.js"></script>
      <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  
      <!-- Core plugin JavaScript-->
      <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  
      <!-- Custom scripts for all pages-->
      <script src="js/sb-admin-2.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>
</body>
</html>
@endsection

