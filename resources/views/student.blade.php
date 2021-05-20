<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body background="https://png.pngtree.com/back_origin_pic/05/07/23/e53e2138838b60dcb17edf89de0878e3.jpg">

  @csrf
    <nav class="navbar navbar-expand-lg navbar-light "style="background-color: #5E5A80;">

        <div class="container-fluid">
          
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/student">foodMenu</a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link" href="/studentorder">Order</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/">Logout</a>
              </li>
              <a class="navbar-brand" href="">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspMess Managemenet System</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
            </ul>
          </div>
        </div>
      </nav>


      <div class="container">
        <div class="row">
        <div class="col col-12 col-sm-4 col-md-4 col-lg-4">
        </div>
        <div class="col col-12 col-sm-4 col-md-4 col-lg-4">
        <h3>&nbsp&nbsp&nbsp&nbspOrder Dishes From Menu</h3>
    
        
        
    
    
        </div>
        <div class="col col-12 col-sm-4 col-md-4 col-lg-4">
        </div>
        </div>
        <table class="table table-striped table-hover">
          <thead>
            <tr>
              <th scope="col">Image</th>
              <th scope="col">Food Name</th>
              <th scope="col">Price(Rs)</th>
              <th scope="col">Action</th>
            

            </tr>
          </thead>
          <tbody>
          @foreach($data as $user)
            <tr>
              
            <td><img src="{{asset('uploads/'.$user->image)}}" width="100px" height="100px" alt="img"></td>
              
              <td>{{$user->foodname}}</td>
                
                <td>{{$user->price}}</td>
                
                
              <td>
                <a class="btn btn-warning" href="{{"orderno/".$user->id}}" >ORDER NOW</button>
                <!-- <a class="btn btn-warning"  role="button">Order Now</a> -->
            </tr>
            @endforeach
           
          </tbody>
        </table>
      </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>