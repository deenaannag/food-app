<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body background="https://png.pngtree.com/back_origin_pic/05/07/23/e53e2138838b60dcb17edf89de0878e3.jpg">
  @csrf
  <nav class="navbar navbar-expand-lg navbar-light sticky-top" style="background-color: #5E5A80;">
            <div class="container-fluid">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              
              <div class="collapse navbar-collapse sticky-top" id="navbarTogglerDemo03">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active"  href="/addfoodview">View Food</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="/adminorder">Food Orders</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="/">Logout</a>
                  </li>
                </ul>
            </div>
            
              <span class="navbar-brand mb-0 h1">Food Space</span>
              

            </div>
    </nav>
      
          
      <div class="container">
        <div class="row">
        <div class="col col-12 col-sm-4 col-md-4 col-lg-4">
        </div>
        <div class="col col-12 col-sm-4 col-md-4 col-lg-4">
        <h3>&nbsp&nbsp&nbsp&nbspFood Orders</h3>
    
         </div>
        <div class="col col-12 col-sm-4 col-md-4 col-lg-4">
        </div>
        </div>
        <table class="table table-striped table-hover">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">OrderNo</th>
                <th scope="col">Order date</th>
                <th scope="col">Item No</th>
                <th scope="col">Price(Rs)</th>
                <!-- <th scope="col">Quantity</th> -->
                <!-- <th scope="col">Total Price</th> -->
                <th scope="col">Student Name</th>
        
              </tr>
            </thead>
            <tbody>
              @foreach($orderlist as $order)
              <tr>
              <td>{{$order->id}}</td>
              <td>{{$order->orderno}}</td>
              <td>{{$order->orderdate}}</td>
              <td>{{$order->itemno}}</td>
              <td>{{$order->price}}</td>
              <td>{{$order->username}}</td>
              </tr>
              @endforeach
            </tbody>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
          
</body>
</html>

