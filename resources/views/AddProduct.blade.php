<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>OSP</title>

    <!-- Bootstrap core CSS-->
    <link href="{{asset('backend/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="{{asset('backend/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="{{asset('backend/css/sb-admin.css')}}" rel="stylesheet">

  </head>

  <body class="bg-dark">

    <div class="container">
      <div class="card card-register mx-auto mt-5">
        <div class="card-header">Add Product</div>
        <div class="card-body">
         
          <form method="post" action="{{ URL::to('store' )}}">
            {{csrf_field()}}
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" name="productname"  id="firstName" class="form-control" placeholder="Product Name"  autofocus="autofocus">
                    <label for="firstName">Product Name</label>
                    
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" name="productid"  id="lastName" class="form-control" placeholder="Product Id" >
                    <label for="lastName">Product Id</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="text" name="productprice"  id="inputEmail" class="form-control" placeholder="Product Price" >
                <label for="inputEmail">Product Price</label>
              </div>
            </div>
            
           
           
            <button type="submit" class="btn btn-primary btn-block">Add Product</button>
          </form>
         
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('backend/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('backend/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('backend/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

  </body>

</html>