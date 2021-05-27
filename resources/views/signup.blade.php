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
<form action="signup" method="post">
@csrf

<!--<nav class="navbar navbar-expand-lg navbar-light"style="background-color: #5E5A80;">

  <div class="container-fluid">
    
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="/login">login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/signup">SignUp</a>
        </li>
        <a class="navbar-brand" style="padding-left:900px;" href="">Mess Managemenet System</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
      </ul>
    </div>
  </div>
</nav>-->
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
          <a class="nav-link active"  href="/login">logIn</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="/signup" tabindex="-1" aria-disabled="true">SignUp</a>
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
   <h3>Student Registration</h3>
   @csrf
   <table class="table table-borderless">
   
   <tr>
       <td>UserName:</td>
       <td><input type="text" class="form-control" name="username"></td>
       @error('username'){{$message}}@enderror
   </tr>
   <tr>
       <td>Email-id:</td>
       <td><input type="text" class="form-control" name="email"></td>
       @error('email'){{$message}}@enderror
   </tr>
   <tr>
       <td>Mobile:</td>
       <td><input type="text" class="form-control" name="mobile"></td>
       @error('mobile'){{$message}}@enderror
   </tr>
   <tr>
       <td>Address:</td>
       <td><input type="text" class="form-control" name="address"></td>
       @error('address'){{$message}}@enderror
   </tr>
   <tr>
       <td>Password:</td>
       <td><input type="password" class="form-control" name="password"></td>
       @error('password'){{$message}}@enderror
   </tr>
   <tr>
       <td>Confirm Password:</td>
       <td><input type="password" class="form-control" name="createpassword"></td>
       @error('createpassword'){{$message}}@enderror
   </tr>
   <tr>
       <td></td>
       <td><button class="btn btn-success">SIGNUP</button></td>
   </tr>
   </table>
   </div>
   <div class="col col-12 col-sm-4 col-md-4 col-lg-4">
   </div>
   </div> 

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
   </form>
</body>
</html>
