<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>OSD</title>

    <link href="{{asset('backend2/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="{{asset('backend2/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="{{asset('backend2/vendor/datatables/dataTables.bootstrap4.css')}}" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('backend2/css/sb-admin.css')}}" rel="stylesheet">

  </head>

  <body class="">

    <div class="container">
        <h2>All Product</h2>            
        <table class="table">
          <thead>
            <tr>
              <th>Product Name</th>
              <th>Product Id</th>
              <th>Product Price</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @if(count($data)>0)
              @foreach($data as $d)
                <tr>
                  <td>{{ $d->productname }}</td>
                  <td>{{ $d->productid }}</td>
                  <td>{{ $d->productprice }}</td>
                 <td>
                    <a href="{{ URL::to('edit',['id'=>$d->id]) }}" class="btn btn-info">Edit</a>
                    <a href="{{ URL::to('del',['id'=>$d->id]) }}" class="btn btn-info">Delete</a>
                  </td>
                 
                </tr>
              @endforeach
            @else
      
            @endif
           
            
          </tbody>
        </table>
      </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('backend/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('backend/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('backend/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

  </body>

</html>