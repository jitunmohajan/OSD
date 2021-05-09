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

  <body class="">

    <div class="card-body">


        <form id="signup-form" class="signup-form" method="post" action="{{ URL::to('update',['id'=>$data->id]) }}">
            {{csrf_field()}}
             <div class="form-row">
              <div class="form-group col-md-6">
                <label>PRoduct Name</label>
                <input type="text" value="{{ $data->productname }}" class="form-control" name="productname" placeholder="Title">
              </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                  <label>Product ID</label>
                  <input type="text" value="{{ $data->productid }}" class="form-control" name="productid" placeholder="Title">
                </div>
              </div>

              <div class="form-row">
                <div class="form-group col-md-6">
                  <label>Product Price</label>
                  <input type="text" value="{{ $data->productprice }}" class="form-control" name="productprice" placeholder="Title">
                </div>
              </div>
            
                      
            <button type="submit" class="btn btn-primary">Update</button>
          </form>
        </div>

    

  </body>

</html>